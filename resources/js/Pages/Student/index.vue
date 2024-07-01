<!-- resources/js/Pages/Student/Index.vue -->
<template>
  <AppLayout>
    <template #content>
      <form @submit.prevent="taskStore">
        <div>
          <h1 class="text-center">Student Page</h1>
          <div class="container-fluid col-6">
            <div class="row">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">first Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" v-model="task_form.name"
                  placeholder="Name" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">age</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Age"
                  v-model="task_form.age" />
              </div>
              <div class="mb-3">
                <button class="btn btn-info" type="submit">submit</button>
              </div>
            </div>
          </div>

          <table class="table p-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Age</th>
                <th scope="col">Satuse</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(task, key) in task_list">
                <th scope="row">{{ ++key }}</th>
                <td>{{ task.name }}</td>
                <td>{{ task.age }}</td>
                <td>
                  <span v-if="task.status == 0">Not Completed</span>
                  <span v-else>Completed</span>
                </td>
                <td>
                  <button type="button" @click="deleteTask(task.id)" class="btn btn-danger">
                    DELETE
                  </button>
                  <button type="button" href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </template>
  </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/App.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import axios from "axios";

export default {
  components: {
    AppLayout,
  },

  data() {
    return {
      task_form: {
        name: "",
        age: "",
      },
      task_list: [],
    };
  },
  beforeMount() {
    this.getTask();
  },

  methods: {
    async getTask() {
      const tasks = (await axios.get(route("Student.list"))).data;
      this.task_list = tasks;

    },
    async taskStore() {
      const tasks = (await axios.post(route("Student.store"), this.task_form)).data;

      this.getTask();
      this.task_form = {};
    },

    async deleteTask(id) {
      const tasks = (await axios.delete(route("student.delete", id))).data;
      this.getTask();
    },
  },
};
</script>
