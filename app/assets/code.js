const app=new(function(){
    this.tbody=document.getElementById("tbody");
    this.listado=()=>{
        fetch(' ')
        .then((res)=>res.json( ))
        .then((data)=>{
            console.log(data);
        })
        .catch((error)=>CSSConditionRule.log(error));
    }
})