const app = new Vue ({
  el: '#app',
  data:{
    apiUrl: 'http://localhost:8080/php-ajax-dischi/api.php',
    myAlbums: [],
  },
  mounted(){
    this.getApi();
  },
  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(response => {
        console.log(response.data);
        this.myAlbums = response.data;
      })
    }
  }
})