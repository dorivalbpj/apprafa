document.addEventListener( 'DOMContentLoaded', function(){
    let video = document.querySelector("#webcam");
	
	// alguns celulares necessitam destas configurações
       //video.setAttribute('autoplay', '');
	   //video.setAttribute('muted', '');
	   //video.setAttribute('playsinline', '');
		
	 
	if (navigator.mediaDevices.getUserMedia) {
		navigator.mediaDevices.getUserMedia({audio: false, video: {facingMode: "environment"}}).then( function(stream) {
			video.srcObject = stream;
		})
		.catch(function(error) {
			alert("Não foi possível iniciar a câmera.");
		});
    }
});

/*function CarregarFoto(){
	alert(document.getElementById("foto").getAttribute('sel'));
}*/

function Abrircamera(){	
	let x = document.querySelector("#id_camera");
	let y = document.querySelector("#btncamera");
	
    if (x.style.display === "none") {
        x.style.display = "block";
		y.innerHTML = "Fechar Câmera";
    } else {
        x.style.display = "none";
		y.innerHTML = "Abrir Câmera";
    }
}	

function foto(){	
	let video = document.querySelector("#webcam");	
	let canvas = document.createElement('canvas');
	
	canvas.width = video.videoWidth;
	canvas.height = video.videoHeight;
	let ctx = canvas.getContext('2d');
	
	ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
	
	let dataURI = canvas.toDataURL('image/jpeg'); 
		
	if (document.querySelector("#foto").getAttribute('src') == ''){		
		document.querySelector("#foto").src = dataURI;	
		document.querySelector("#base64").value = dataURI;
	}else if (document.querySelector("#foto2").getAttribute('src') == '') {		
		document.querySelector("#foto2").src = dataURI;
		document.querySelector("#base64_2").value = dataURI;
	}else if (document.querySelector("#foto3").getAttribute('src') == '') {			
		document.querySelector("#foto3").src = dataURI;
		document.querySelector("#base64_3").value = dataURI;
	}else if (document.querySelector("#foto4").getAttribute('src') == '') {		
		document.querySelector("#foto4").src = dataURI;	
		document.querySelector("#base64_4").value = dataURI;
	}else if (document.querySelector("#foto5").getAttribute('src') == '') {		
		document.querySelector("#foto5").src = dataURI;
		document.querySelector("#base64_5").value = dataURI;
	}	
}