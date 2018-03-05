new Vue({
	el: '#vdocente',
	created: function(){
		this.getTdocentes();
	},
	data: {
		tdocentes: []
	},
	methods: {
		getTdocentes: function(){
			var urlDocentes = 'docentes';
			axios.get(urlDocentes).then(response => {
				this.tdocentes = response.data
			});
		},

		deleteTdocentes: function(docente){
			var url = 'docentes/'+ docente.id;
			axios.delete(url).then(response => {
				this.getTdocentes();
			});
		}
	}
});
