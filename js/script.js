const app = new Vue ({
  el: '#app',
  data:{
    apiUrl: 'http://localhost:8080/php-ajax-dischi/data/api.php',
    albums: [],
    genres: [],
    genreToSearch: 'all'
  },
  mounted(){
    this.getApi();
  },
  methods:{
    getApi(){
      axios.get(this.apiUrl, {
        params: {
          genre: this.genreToSearch
        }
      })
      .then(res => {
        console.log(res.data);
        this.albums = res.data.albums;
        this.genres = res.data.genres;
      })
      
    }
  }
})