<template>
  <div>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6"></div>
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
            <h3 class="card-title">Sobre Mi</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form @submit="formSubmit" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="titulo">Titulo</label>
                <input
                  type="text"
                  class="form-control"
                  id="title"
                  placeholder="Titulo"
                  name="title"
                  required
                  v-model="abounts.title"
                />
              </div>
              <div class="form-group">
                <label for="sub titulo">sub titulo</label>
                <input
                  type="text"
                  class="form-control"
                  id="subtitle"
                  placeholder="sub titulo"
                  name="subtitle"
                  required
                  v-model="abounts.subtitle"
                />
              </div>
              <div class="form-group">
                <label>Descripcion</label>
                <textarea
                  class="form-control"
                  rows="3"
                  placeholder="Descripcion ..."
                  style="margin-top: 0px; margin-bottom: 0px; height: 85px"
                  name="description"
                  id="description"
                  v-model="abounts.description"
                  required
                ></textarea>
              </div>
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
                    <label class="custom-file-label" for="imagen"></label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  props: ["about"],
  data() {
    return {
      abounts: {
        title: null,
        subtitle: null,
        description: null,
      },
      imagen: null,
      id: null,
      file: null,
    };
  },
  mounted() {
    if (this.about != null) {
      this.abounts = this.about;
      this.id = this.about.id;
    }
  },
  methods: {
    onFileChange(e) {
      console.log(e.target.files[0]);
      this.file = e.target.files[0];
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
      formData.append("title", this.abounts.title);
      formData.append("subtitle", this.abounts.subtitle);
      formData.append("description", this.abounts.description);

      axios
        .post("/about/update", formData, config)
        .then(function (response) {
          location.reload();
        })
        .catch(function (error) {
          currentObj.output = error;
        });
    },
   
  },
};
</script>