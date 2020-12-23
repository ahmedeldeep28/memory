

        var swiper = new Swiper('header  .swiper-container', {
            effect: 'flip',
            loop: true ,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
              },
            grabCursor: true,
            pagination: {
              el: '.swiper-pagination',
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
          });
    
    
        /*let frontInput = document.getElementById("front"),
    
           backInput = document.getElementById("back"),
    
           fontSize = document.getElementById("size"),
    
           aleart = document.getElementById("alert"), 
    
           btnAdd = document.getElementById("btn-add"),
            
           perant = document.getElementById("perant");
    
    
           btnAdd.onclick = ()=>{
               
            if(frontInput.value == ""){
                aleart.classList.add("active");
                frontInput.classList.add("alertInput");
                frontInput.focus()
    
            }else if(backInput.value == ""){
                aleart.classList.add("active");
                backInput.classList.add("alertInput");
                backInput.focus()
             
            }else if(fontSize.value > 40){
    
            }
            else{   
    
                frontInput.classList.remove("alertInput");
                backInput.classList.remove("alertInput");
    
               /*creat all element
               let creatCard = document.createElement("div"),
    
                   creatFront = document.createElement("div"),
    
                   creatBack = document.createElement("div"),
    
                   creatSpanFront = document.createElement("span"),
    
                   creatSpanBack = document.createElement("span");
    
    
                   
                   perant.append(creatCard);
    
                   creatCard.append(creatFront);
    
                   creatCard.append(creatBack);
    
                   creatFront.append(creatSpanFront);
    
                   creatBack.append(creatSpanBack);
                   
                   
                   creatCard.classList.add("card");
                   creatFront.classList.add("front");
                   creatBack.classList.add("back");
    
                   creatSpanFront.textContent = frontInput.value;
                   creatSpanBack.textContent = backInput.value;
    
                //    console.log(fontSize.value)
    
    
                    creatSpanFront.style.fontSize = fontSize.value + "px";
    
                    creatSpanBack.style.fontSize = fontSize.value + "px";
                
              
                   frontInput.value = "";
                   backInput.value = "";
    
                   let allCard = document.querySelectorAll(".perant .card");
                   let fliep = Array.from(allCard);
    
                   fliep.forEach((block) =>{
                    fliepCard(block)
                  });
                   
            }
    
            
        }*/
    
           
           /**let allCard = document.querySelectorAll(".perant .card");
           let fliep = Array.from(allCard);
           fliep.forEach((block) =>{
            fliepCard(block)
          });
    
          function fliepCard(flip){
            flip.onclick = ()=>{
                flip.classList.toggle("active")
            }
          }*/
          let allCard = document.querySelectorAll(".card .content");
          let fliep = Array.from(allCard);
          fliep.forEach((block) =>{
           fliepCard(block)
         });
   
         function fliepCard(flip){
           flip.onclick = ()=>{
               flip.parentElement.parentElement.classList.toggle("active")
           }
         }
         

    

    