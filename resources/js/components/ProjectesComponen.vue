<template>
  <main>
    <div id="main">
      <div class="inner">
        <!-- Boxes -->
        <div class="thumbnails">
          <div class="box text-light bg-blue" v-for="projecte in projectes" :key="projecte.id">
            <a class="image fit">
              <img :src="projecte.foto" alt="foto" class="image fit" />
            </a>
            <div class="inner">
              <h3 v-text="projecte.nom"></h3>
              <p v-text="projecte.descripcio"></p>
              <a class="button fit">Watch</a>
            </div>
          </div>
          <!-- glyphicon glyphicon-plus-sign -->

          <div class="box text-light bg-blue">
            <div class="btn inner p-md-5 d-flex align-items-center h-100 justify-content-md-center">
              <a @click="abrirModal('insert')">
                <img id="añadir" src="storage/add.png" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------------------------- MODAL ------------------------->
    <div
      class="modal fade"
      :class="{ mostrar: modal }"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modelTitleId"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #79A6EA">
            <h5 class="modal-title">Add project</h5>
            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: #EADAB6;">
            <form action method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Nom</label>
                <div class="col-md-9">
                  <input />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Usuari</label>
                <div class="col-md-9"></div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Recurs</label>
                <div class="col-md-9"></div>
              </div>

              <!-- ERRORES!! -->
              <div v-show="errorProjecte" class="form-group row">
                <div class="offset-3 col-md-9">
                  <p class="text-danger" v-for="error in mensajesError" :key="error" v-text="error"></p>
                </div>
              </div>
            </form>
          </div>

          <!-- BOTONES -->
          <div class="modal-footer" style="background-color: #EADAB6;">
            <button
              type="button"
              class="btn btn-secondary"
              @click="cerrarModal()"
              data-dismiss="modal"
            >Close</button>
            <button
              type="button"
              v-if="tipusAccio == 1"
              class="btn btn-primary"
              @click="insertProjecte()"
            >Guardar</button>
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
      projectes: null,
      projecte: {
        id: null,
        nom: null,
        descripcio: null,
        foto: null,
        id_asignatura: null
      },
      modal: 0,
      modal_esborrar: 0,
      tipusAccio: 0,
      errorProjecte: false,
      mensajesError: []
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
    abrirModal(accion, data = []) {
      switch (accion) {
        case "insert": {
          this.modal = 1;
          this.tipusAccio = 1;
          break;
        }
      }
    },
    cerrarModal(accion = "") {
      switch (accion) {
        default: {
          this.modal = 0;
          this.projecte.id = null;
          this.projecte.nom = null;
          this.projecte.descripcio = null;
          this.projecte.foto = null;
          this.projecte.id_asignatura = null;
          break;
        }
      }
      this.errorProjecte = false;
      this.mensajesError = [];
    },
    insertProjecte() {
      let me = this;
      axios
        .post("/projecte", this.projecte)
        .then(function(response) {
          me.cerrarModal();
          me.mostrarProjectes();
        })
        .catch(function(error) {
          me.errorProjecte = true;
          me.missatge = error.response.data;
          me.errorProjecte = true;
          me.mensajsError.push(me.missatge.error);
        });
    }
  },

  mounted() {
    console.log("Component mounted.");
  }
};
</script>
