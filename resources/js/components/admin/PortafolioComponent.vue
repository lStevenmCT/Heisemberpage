<template>
  <section>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </div>
    </div>
    <section class="content">
      <!-- /.container-fluid -->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Portafolio</h3>
          </div>
          <div class="card-body">
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModal"
            >
              Crear Portafolio
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Crear Portafolio
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form @submit="formSubmit" enctype="multipart/form-data">
                  <div class="modal-body">
                  
            
                        <div class="form-group">
                          <label for="imagen">Imagen</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input
                                type="file"
                                class="custom-file-input"
                                id="imagen"
                                name="imagen"
                                accept="image/*"
                                v-on:change="onFileChange"
                              />
                              <label class="custom-file-label" for="imagen">{{
                                fileName
                              }}</label>
                            </div>
                          </div>
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
                    <button type="submit" class="btn btn-primary">
                      Save changes
                    </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <table id="banners" class="display" style="width: 100%">
              <thead>
                <tr>
                  <th width="35%">Portafolio</th>
                  <th>Aciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="data in portafolios" :key="data.id">
                  <td><img :src="data.imagenes" style="width: 80px;"></td>
                  <td>
                    <button
                      v-on:click="getData(data.id)"
                      data-toggle="modal"
                      data-target="#exampleModal"
                      class="btn btn-primary"
                    >

                      Editar
                    </button>

                    <button
                      v-on:click="deletData(data.id)"
                      style="background-color: red"
                      class="btn"
                    >
                      Eliminar
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- /.card-header -->
          <!-- form start -->
        </div>
      </div>
    </section>
  </section>
</template>

<script>
import datatable from "datatables.net-bs4";

export default {
  props: ["portafolio"],
  data() {
    return {
      portafolios: null,
      file: null,
      fileName: null,
      id:null,
      title:null
    };
  },
  mounted() {
    this.portafolios=this.portafolio
    this.tabla();
  },
  methods: {
    onFileChange(e) {
      this.file = e.target.files[0];
      this.fileName = e.target.files[0].name;
    },
    tabla() {
      this.$nextTick(() => {
        $("#banners").DataTable();
      });
    },
    formSubmit(e) {
      e.preventDefault();
      let currentObj = this;

      const config = {
        headers: { "content-type": "multipart/form-data" },
      };

      let formData = new FormData();
      formData.append("file", this.file);
      formData.append("id", this.id);  
      axios
        .post("/portafolio/update", formData, config)
        .then(function (response) {
          location.reload();
        })
        .catch(function (error) {
          currentObj.output = error;
        });
    },
     getData(data) {
      data = this.portafolios.find((e) => e.id == data);
      this.id = data.id;
      this.fileName = data.imagen;
    },
    deletData(id) {
     
      let cofirm = confirm("Deseas eliminar la imagen ?" );
      if (cofirm) {       
        axios
          .post("/portafolio/delete", {
            id: id ,
          })
          .then((response) => {
            location.reload();
          })
          .catch((error) => {
            console.log(error);
            this.errored = true;
          });
      } else {
        console.log("no confirmo");
      }
    },
  },
};
</script>