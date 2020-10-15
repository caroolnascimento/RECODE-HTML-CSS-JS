// função onclik para filtar elementos na página de produtos.html
function exibir_categoria(categoria){
    //alert(categoria);
    
let elementos = document.getElementsByClassName("box_produtos");
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
            elementos[i].style = "display:block";
        else
            elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName("box_produtos");
    for (var i=0; i<elementos.length; i++){
        elementos[i].style = "display:inline-block";

    }
}

//Função usada para aumentar a imagem com onclik
let destaque = (imagem) => {
   if (imagem.width == 120)
    imagem.style = 'width:240px'
    else
    imagem.style = 'width:120px'
}
