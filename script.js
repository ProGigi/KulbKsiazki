let i =2;
let j =0;
let x;
let tab = [];
let tabA = [];
let a = 0;

$('.bars').on('click', function(){
    $('.nav, .close, nav').addClass('action');
})

$('.close').on('click', function(){
    $('.nav, .close, nav, .popUp, .blur').removeClass('action');
    
    $('header').css("filter","blur(0)");
})

$('.readNow1').on('click', function(){
    $('.popUp, .blur').addClass('action');
    $('.nav').removeClass('action');
    $('header').css("filter","blur(2px)");
})






// losowanie 


       
       
$('.chooseButton').on('click', function(){
        
    if(i==16){
       $('a.chooseButton.button').addClass("action");
       $('h2.firstChoose').css("border-top-width","0");       
       $('a.firstChoose').css("display","block");
    }

     $nth1 = $('div.rowChoose:nth-child('+i+') input');
        $nth2 = $('div.rowChoose:nth-child('+(i+1)+') input');

        $divNth1 = $('div.rowChoose:nth-child('+i+')');
        $divNth2 = $('div.rowChoose:nth-child('+(i+1)+')');
        $divNth3 = $('div.rowChoose:nth-child('+(i+2)+')');
        $divNth4 = $('div.rowChoose:nth-child('+(i+3)+')');
       
    //zmiana po drugim obrocie funkcjii
    if(j%2==0){
        x=j;
    }else{
        x=j-1;
    }

    //
        if($nth1.is(':checked')){
            $('.firstChoose').addClass("action");
            tab[j]=$nth1.val();
            $divNth1.css("display","none");
            $('.first').append('<div class="choose"><input type="radio" class="rowChoose1" name="choose'+x+'" id="choose'+j+'" value ="'+tab[j]+'"class="radioChoos"><label for="choose'+j+'" class="radioChoos">'+tab[j]+'</label> </div>');
            $divNth2.css("display","none");
            $divNth3.css("display","block");
            $divNth4.css("display","block");
            i+=2;
            j++;
            

        }else if($nth2.is(':checked')){            
            $('.firstChoose').addClass("action");
            tab[j]=$nth2.val();          
            $divNth1.css("display","none");
            $('.first').append('<div class="choose"><input type="radio" name="choose'+x+'" class="rowChoose1" id="choose'+j+'" value ="'+tab[j]+'"class="radioChoos"><label for="choose'+j+'" class="radioChoos">'+tab[j]+'</label> </div>');            
            $divNth2.css("display","none");
            $divNth3.css("display","block");
            $divNth4.css("display","block");
            i+=2;
            j++;

        }else{
            alert("musisz coś wybrać")
        }
        
        
})

//druga faza losowania


$('.firstChooseButton').on('click', function(){
a=0;
    for(let y = 0;y<8; y++){
        $check = $('#choose'+y+'');

        if($check.is(':checked')){

            tabA[a]= $check.val();
            
            a++;  
            console.log(a);        
        }
        
    }
    if(a>3){
            console.log("tu");
            $('.firstChooseButton').css("display","none");
             $('a.secendChooseButton').css("display","block");
            $('.secendChoose').addClass('action');  
            $('.secend').append('<div class="choose"><input type="radio" name="secendChoose0" class="rowChoose1" id="choice0" value ="'+tabA[0]+'"class="radioChoos"><label for="choice0" class="radioChoos">'+tabA[0]+'</label> </div>'); 
             
            $('.secend').append('<div class="choose"><input type="radio" name="secendChoose0" class="rowChoose1" id="choice1" value ="'+tabA[1]+'"class="radioChoos"><label for="choice1" class="radioChoos">'+tabA[1]+'</label> </div>'); 
             
            $('.secend').append('<div class="choose"><input type="radio" name="secendChoose1" class="rowChoose1" id="choice2" value ="'+tabA[2]+'"class="radioChoos"><label for="choice2" class="radioChoos">'+tabA[2]+'</label> </div>'); 
             
            $('.secend').append('<div class="choose"><input type="radio" name="secendChoose1" class="rowChoose1" id="choice3" value ="'+tabA[3]+'"class="radioChoos"><label for="choice3" class="radioChoos">'+tabA[3]+'</label> </div>'); 


        }

})

//trzecia faza 
$('.secendChooseButton').on('click', function(){
a=0;
    for(let y = 0;y<4; y++){
        $check = $('#choice'+y+'');

        if($check.is(':checked')){
            tabA[a]= $check.val();
            
            a++;  
            console.log(a);        
        }
    }
    if(a>1){
            console.log("tu2");
            $('a.secendChooseButton').css("display","none");              
            $('input.threeChooseButton').css("display","block");         
            $('.threeChoose').addClass('action');  

            $('.three').append('<div class="choose"><input type="radio" name="threeChoose0" class="rowChoose1" id="threechoice0" value ="'+tabA[0]+'"class="radioChoos"><label for="threechoice0" class="radioChoos">'+tabA[0]+'</label> </div>'); 
             
            $('.three').append('<div class="choose"><input type="radio" name="threeChoose0" class="rowChoose1" id="threechoice1" value ="'+tabA[1]+'"class="radioChoos"><label for="threechoice1" class="radioChoos">'+tabA[1]+'</label> </div>'); 
           
        }

})



