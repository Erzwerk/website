
function was_clicked () {
	console.log("clicked!");
        
        
        var cpu = document.getElementById("HardwareCPU");
        console.log(cpu.options[cpu.selectedIndex].value);
        var CPU = cpu.options[cpu.selectedIndex].value;
        
        var gpu = document.getElementById("HardwareGPU");
        console.log(gpu.options[gpu.selectedIndex].value);
        var GPU = gpu.options[gpu.selectedIndex].value;
        
        var dateipfad = CPU + "/" + GPU + "/Bild.png";
        console.log (dateipfad);
    
        var element = document.getElementById("Bild").firstElementChild;
        if (element != null){
            element.parentNode.removeChild(element);
        }
    
        var img = document.createElement("img");
        img.src = dateipfad;
        document.getElementById("Bild").appendChild(img);

    
}
document.getElementById("Execute").addEventListener("click", was_clicked);

function was_saved () {
    console.log("saved");
        var element = document.getElementById("Bild").firstElementChild;
        if (element != null){
            
        var cpu = document.getElementById("HardwareCPU");
        var CPU = cpu.options[cpu.selectedIndex].value;
        
        var gpu = document.getElementById("HardwareGPU");
        var GPU = gpu.options[gpu.selectedIndex].value;
        
        var speichern = CPU + "/" + GPU + "/Bild.png";
        console.log(speichern);

        document.cookie = speichern + "; expires=Fri, 31 Dec 9999 23:59:59 GMT;path=/;SameSite=Lax";
        }
        else {
            throw ("select a benchmark");
        }
}
document.getElementById("save").addEventListener("click", was_saved);

function was_tested(){
    console.log("1");
    var speichern = document.cookie;
    console.log(speichern);

    var dateipfad = speichern;
    console.log (dateipfad);

    var element = document.getElementById("Bild").firstElementChild;
    if (element != null){
        element.parentNode.removeChild(element);
    }

    var img = document.createElement("img");
    img.src = dateipfad;
    document.getElementById("Bild").appendChild(img);
    } 

document.getElementById("test").addEventListener("click", was_tested);
