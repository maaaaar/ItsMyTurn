<template>
    <main>
        <div id="main">
            <div class="inner">
                <!-- Boxes -->
                <div class="thumbnails">
                    <div
                        class="box text-light bg-blue"
                        v-for="projecte in projectes"
                        :key="projecte.id"
                    >
                        <a class="image fit">
                            <img
                                :src="projecte.foto"
                                alt="foto projecte"
                                class="image fit"
                            />
                        </a>
                        <div class="inner">
                            <h3 v-text="projecte.nom"></h3>
                            <p v-text="projecte.descripcio"></p>
                            <!-- <a class="button fit" role="button" href="">GIT</a> -->
                            <h4>Technologies used in this project:</h4>
                            <p v-text="projecte.lenguatges"></p>
                        </div>
                    </div>
                    <div class="box text-light bg-blue">
                        <div
                            type="button"
                            data-toggle="modal"
                            data-target="#modelId"
                            class="btn inner p-md-5 d-flex align-items-center h-100 justify-content-md-center"
                        >
                            <a>
                                <img id="añadir" src="storage/add.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div
            class="modal fade"
            id="modelId"
            :show="modal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modelTitleId"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add project</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form
                            action
                            method="post"
                            enctype="multipart/form-data"
                            class="form-horizontal"
                        >
                            <div class="form-group row">
                                <label
                                    class="col-md-3 form-control-label"
                                    for="text-input"
                                    >Name</label
                                >
                                <div class="col-md-9">
                                    <input
                                        type="text"
                                        ref="nom"
                                        v-model="projecte.nom"
                                        class="form-control"
                                    />
                                </div>
                                <label
                                    class="col-md-3 form-control-label"
                                    for="text-input"
                                    >Description</label
                                >
                                <div class="col-md-9">
                                    <input
                                        type="text"
                                        ref="descripcio"
                                        v-model="projecte.descripcio"
                                        class="form-control"
                                    />
                                </div>


                                <label class="col-md-3 form-control-label" for="foto"
                                    >Photo</label
                                >
                                <div class="col-md-9">
                                    <input type="file" @change="obtenerImagen"
                                    class="form-control-file" />
                                </div>

                                <label
                                    class="col-md-3 form-control-label"
                                    for="text-input"
                                    >Technoogia</label
                                >
                                <div class="col-md-9">
                                    <input
                                        type="text"
                                        ref="lenguatges"
                                        v-model="projecte.lenguatges"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    @click="insertProjecte()"
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            modal: false,
            projectes: null,
            projecte: {
                id: null,
                nom: null,
                descripcio: null,
                foto: null,
                lenguatges: null
            }
        };
    },
    created() {
        this.mostrarProjectes();
    },
    methods: {
        mostrarProjectes() {
            let me = this;
            axios
                .get("/projecte")
                .then(function(response) {
                    me.projectes = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        cerrarModal() {
            this.modal = !this.modal
            // this.modal = 0;
            // this.projecte.nom = null;
            // this.projecte.descripcio = null;
            // this.projecte.lenguatges = null;
        },
        insertProjecte() {
            let me = this;
            axios
                .post("/projecte", this.projecte)
                .then(function(response) {
                    me.projectes = response.data;
                    me.cerrarModal();
                    me.mostrarProjectes();

                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
