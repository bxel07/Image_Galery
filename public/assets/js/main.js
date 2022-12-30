const _form = document.getElementById("form-upload");
let file = document.querySelector("input[type='file']");

let _data = new FormData(_form);
let http = new XMLHttpRequest();

_form.addEventListener('submit', function(e){
	e.preventDefault();
	_data.append('file', fileField.files[0]);
	http.open('post', 'includes/get.inc.php');
	http.send(_data);
	_elemen.innerHTML = '';
	http.onreadystatechange = function(){
 		if(this.readyState === 4 && this.status === 200){	
 			let show = JSON.parse(this.responseText);	
 			if(show.success==true) {
 				window.location('http://127.0.0.1/php_oop/Project/img_galery_project/includes/get.inc.php');
				_form.reset();
			}else{
 				popup.innerHTML = `<p class="alert-error">${show.messages}</p>`;
			}
			setTimeout(function() {
				popup.innerHTML = ''
			}, 2000)
		}
	}
}, false);