function pass(status,id){
    if (status ==="pass"){
        document.getElementById(id).classList.add("completed");
    }else if(status ==="on-going"){
        document.getElementById(id).classList.add("on-going");
    }else if(status ==="not-yet-enrolled"){
        document.getElementById(id).classList.add("not-yet-enrolled");
    }else if(status ==="already-enrolled"){
        document.getElementById(id).classList.add("already-enrolled");
    }else if(status ==="no-planning-yet"){
        document.getElementById(id).classList.add("no-planning-yet");
    }
    
}


