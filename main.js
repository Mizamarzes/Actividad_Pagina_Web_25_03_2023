addEventListener("submit", async(e)=>{
    e.preventDefault(); 
    let data = Object.fromEntries(new FormData(e.target));
    document.querySelectorAll('[type="checkbox"]').forEach((val, id)=> (val.checked) ?((typeof(data[`${val.name}`])=="string") ? data[`${val.name}`] = [val.value] : data[`${val.name}`].push(val.value)):null);
    let peticion = await fetch(e.target.action,{method: e.target.method, body: JSON.stringify(data)});
    let datos = await peticion.text();
    document.querySelector("pre").innerHTML = datos;
})

function imgSlider(anything){
    document.querySelector('.starbucks').src = anything;
}

function changeCircleColor(color){
    const circle = document.querySelector('.circle');
    circle.style.background = color;
}

function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active')
    navigation.classList.toggle('active')        
}

