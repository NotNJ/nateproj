<template>
    <div class="container">
        <div class="row" v-if="imageRows[0].imgUrl != ''" v-for="row in imageRows">
            <div class="col-6"> 
                <p>{{ row.imgBlurb }}</p> 
            </div> 
            <div class="col-6"> 
                <div class="polaroid"> 
                    <img :src="row.imgUrl" style="width:540px"> 
                    <div class="polaroid-container"> 
                        <p>{{ row.imgCaption }}</p> 
                    </div> 
                </div> 
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 offset-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPictureModal">Add a new Picture</button>
            </div>
        </div>

        <div class="modal fade" id="addPictureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add a Picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addNewPic">
                            <input type="hidden" name="_token" :value="csrfToken" />
                            <div class="form-group">
                                <input type="text" name="imgUrl" class="form-control" placeholder="Image URL" ref="imgUrl">
                            </div>
                            <div class="form-group">
                                <input type="text" name="imgCaption" class="form-control" placeholder="Image Caption" ref="imgCaption">
                            </div>
                            <div class="form-group">
                                <textarea name="imgBlurb" cols="50" rows="10" class="form-control" placeholder="Enter a description" ref="imgBlurb"></textarea>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  

</template>

<script>
    export default {
        data() {
            return {
                csrfToken: axios.defaults.headers.common['X-CSRF-TOKEN'],
                imageRows: [{
                    imgUrl: '',
                    imgCaption: '',
                    imgBlurb: '',
                }],
                formData: {
                    imgUrl: '',
                    imgCaption: '',
                    imgBlurb: '',
                },
            };
        },
        mounted() {
            console.log('Component mounted.');
            this.fetchAllPics();
        },
        methods: {
            fetchAllPics() {
                axios.get('/fetchAllImageRows', {

                }).then(response => {
                    this.imageRows = response.data.data;
                    console.log(this.imageRows);
                }, response => {

                });
            },
            addNewPic() {
                this.formData.imgUrl = this.$refs.imgUrl.value;
                this.formData.imgCaption = this.$refs.imgCaption.value;
                this.formData.imgBlurb = this.$refs.imgBlurb.value;

                axios.post('/saveImageRow', {
                    form_data: this.formData,
                }).then(response => {
                    this.imageRows.push({imgUrl: response.data.data.imgUrl, imgCaption: response.data.data.imgCaption, imgBlurb: response.data.data.imgBlurb});
                    $('#addPictureModal').modal('hide');
                    this.$refs.imgUrl.value = '';
                    this.$refs.imgCaption.value = '';
                    this.$refs.imgBlurb.value = '';
                }, response => {

                });
            }
        }
    }
</script>
