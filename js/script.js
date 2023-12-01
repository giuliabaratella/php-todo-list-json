const { createApp } = Vue;

createApp({
  data() {
    return {
      newText:'',
      apiUrl:'server.php',
      todolist: [],

    };
  },
  methods: {
    getTasks(){
      axios.get(this.apiUrl).then((response)=>{
        // console.log(response.data);
        this.todolist = response.data;
      }).catch ((error)=>{
        console.log(error);
      })

    },
    addTask(){
      if(this.newText !== ''){
        const data= new FormData();
        data.append("newTask", this.newText);

        axios.post(this.apiUrl, data)
        .then((response)=>{
        this.todolist = response.data;

        }).catch ((error)=>{
          console.log(error);
        })
      }
      

    }
   
  },

  mounted() {
    this.getTasks();
  },
}).mount("#app");