
function showPreview(title,desc){
    document.getElementById("previewBox").innerHTML =
    "<h3>"+title+"</h3><p>"+desc+"</p>";
}

function openModal(){
    document.getElementById("trailerModal").style.display="block";
}

function closeModal(){
    document.getElementById("trailerModal").style.display="none";
}
