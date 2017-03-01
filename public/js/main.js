Vue.prototype.$http = axios;

class Errors {
	constructor() {
		this.errors = {};
	}

	get(field) {

		if (this.errors[field]) {
			return this.errors[field][0];
		}
	}
}

new Vue({

	el: '#root',

	
	data: {

		skills : [],
		errors: new Errors()

	},

	mounted() {

		// make an ajax request to our server /skills

		this.$http.get('/skills')
		.then(response => this.skills = response.data)
		.catch(error => {
			error.response.data = this.errors
		});
	}



});