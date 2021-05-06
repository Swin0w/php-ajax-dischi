function init() {
  new Vue({
    el: "#app",
    data: {
      disc: []
    },
    mounted() {
      axios.get('config/data.php')
      .then (data => {
        console.log("Contenuto PHP: ", data);
        this.disc = data;
        console.log("Contenuto dentro array DISC di JS: ", this.disc);
      })
    }
  });
}
document.addEventListener('DOMContentLoaded', init);
