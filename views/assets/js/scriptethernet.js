function ethernet(url,method,fncalback,datajson) {
    this.url= url
    this.method= method
    this.dataJson= datajson
    var fnCalback=fncalback

    this.initConnection=function(){
        xhr = new XMLHttpRequest()
        xhr.open(this.method,this.url,true)

        xhr.setRequestHeader('Content-type', 'application/json')
        
        xhr.onreadystatechange= function(){
            if(xhr.readyState==4 && xhr.status==200){
                fnCalback(xhr.responseText)
            } 
        }
        xhr.send(JSON.stringify(this.dataJson))
    }


}

