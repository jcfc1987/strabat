function mostra(msg){
	alert(msg);
}

function teste(){
	alert("teste");
}

function navega(link){
	location.assign(link);
	//alert("Voltar");
}

function setClass(op,id){
	if(op!=1){
		document.getElementById(id).className="correct";
	}
	if(op!=1){
		document.getElementById(id).className="incorrect";
	}
}

function reorder(wrapper_id, preppend_element_id) {
	$(wrapper_id).clone().prependTo(preppend_element_id);
	if($(wrapper_id).length == 2 ) {
		$(wrapper_id)[1].remove();
	}
}

function copy(wrapper_id, preppend_element_id){
	var wrapper_length = $(wrapper_id).length;
	$($(wrapper_id)[wrapper_length -1 ]).clone().appendTo($(preppend_element_id)[0]);
	
}

function disable(elements){
	for(var i = 0; i < elements.length; i++){
		$(elements[i]).prop("disabled","disabled");
	}
}

function enable(elements){
	for(var i = 0; i < elements.length; i++){
		$(elements[i]).removeAttr("disabled");
	}
}

function addClass(elements, className){
	for(var i = 0; i < elements.length; i++){
		$(elements[i]).addClass(className);
	}
}

function removeClass(elements, className){
	for(var i = 0; i < elements.length; i++){
		$(elements[i]).removeClass(className);
	}
}

function addEvent(id, event, callback){
	$(id).on(event, callback);
}