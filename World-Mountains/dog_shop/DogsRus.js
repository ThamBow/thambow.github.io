       window.onload = function() {
		   
		var body = document.body;
		
		var dogBanner =  document.getElementById('banner'); 
		dogBanner.style.background='yellow';
		dogBanner.align ='center';
		dogBanner.style.marginBottom = '10px';
		
		
		var dogBannerImage = document.getElementById('image');
		dogBannerImage.style.marginBottom = '-10px';
		
		 
		var staticPage = document.getElementById('formDiv');//Add form div
		staticPage.style.backgroundImage = "url('daisy.jpg')";
		staticPage.style.backgroundRepeat = 'no-repeat';
		staticPage.style.backgroundSize = 'cover';
		staticPage.style.color='white';
		staticPage.style.fontSize ='18px';
		staticPage.style.textShadow = '2px 2px black';
	
		
		 
		  
	    var showPage = document.createElement('div');//Add results section

		showPage.style.background='blue';
		showPage.style.color='white';
		showPage.align ='center';
		showPage.style.marginTop = '10px';
		showPage.style.marginBottom = '5px';
		
		
		showPage.innerHTML='Results Here!';
		
		var footPage = document.createElement('div');
		footPage.align = 'right';
		footPage.style.color='white';
		footPage.style.textShadow = '2px 2px grey';
		footPage.style.padding = '5px';
		footPage.innerHTML='<p>&copy; 2017  Thamsanqa Moyo</p>';
		
		var pageBox = document.createElement('div');//Add pageholder
		pageBox.style.width = '45%';
		pageBox.style.margin = '50px auto auto auto';
		pageBox.style.backgroundColor = '#eeefe6';
		pageBox.appendChild(dogBanner);
		pageBox.appendChild(staticPage);
		pageBox.appendChild(showPage);
		pageBox.appendChild(footPage);
		document.body.bgColor = '#efad67';
		document.body.appendChild(pageBox); 
		
		
   
  function submitdetails(){
	  //alert('I\'m Clicked!'); //Just checkin'
	  //window.stop();//Probably Reloads page and prevents annoying last page load.
	  
	  var myForm=document.getElementById('questionsForm');
	  var uName=myForm.userName.value;
	  
		  
	  var Dogpic = ["<img src='bully.jpg' />", "<img src='rex.jpg' />", "<img src='daisy.jpg' />", "<img src='dot.jpg' />", "<img src='sam.jpg' />", "<img src='pip.jpg' />", "<img src='cyril.jpg' />", "<img src='bones.jpg' />", "<img src='liquorice.jpg' />", "<img src='fang.jpg' />"];
	  var Dog = ['Bully','Rex','Daisy','Dot','Sam','Pip','Cyril','Bones','Liquorice','Fang'];
	  var Size = ['Small','Small','Small','Medium','Large','Large','Small','Large','Medium','Large'/*,'Don&apos;t Know'*/];
	  var Coat = ['Short','Short','Long','Short','Long','Short','Long','Short','Short','Short'/*,'Don&apos;t Know'*/];
	  var Energy = ['Low','High','Low','High','Low','High','Low','Low','High','High'/*,'Don&apos;t Know'*/];
	  var Children = ['No','Yes','Yes','Yes','Yes','Yes','No','Yes','Yes','No'/*,'Don&apos;t Know'*/];
	  
	  if(uName==null ||  uName==''){
	  alert("Name must be filled out!");
		  location.reload(DogsRus.html);//Reloads page
	  }else if (!isNaN(uName)){     //Checks that uName is not a number.
		  alert("Name must be a word!");
		  location.reload(DogsRus.html);//Reloads page
		  }
	   else{
	  showPage.innerHTML='<h1>Hello '+uName+'</h1><br>';//Initial use of innerHTML over document write. All output from function should use innerHTML.
	  //window.stop();
	  }
	  
	  chosenOption=myForm.Size.selectedIndex;
	  var sizeDog=myForm.Size[chosenOption].value;
  
	  chosenOption=myForm.Coat.selectedIndex;
	  var coatDog=myForm.Coat[chosenOption].value;
  
	  chosenOption=myForm.Energy.selectedIndex;
	  var energyDog=myForm.Energy[chosenOption].value;
  
	  chosenOption=myForm.Children.selectedIndex;
	  var childrenDog=myForm.Children[chosenOption].value;
	  
	  var semiFinalDog = [];
	  
	  var finalDog = [];
	   
	  var collectDog = [];


	  
	  var dogChoice = [sizeDog,coatDog,energyDog,childrenDog];
	  
	  
	  var dogAttribute = [Size, Coat, Energy, Children];

	  /* if (dogChoice.every()  == "Don't Know" )
	  
			 {
				showPage.innerHTML='You have not chosen. Please try again!' + ' ';
				showPage.style.background='yellow';
			 } */
	  
	  for (var i = 0; i < dogAttribute.length; i++){
		  
		  
		  /*dogAttribute[i] = [Size, Coat, Energy, Children];*/
		  if (dogChoice[i]  == "Don't Know" )
	  
			 {
			   delete(dogChoice[i]);
			   
			   delete(dogAttribute[i]);
			   
			   
			   	         
			  }
		  
		  		  
		  }
	  
	  for (var i =0; i < dogChoice.length; i++){
		    
		  	  
	  if (dogChoice[i]  == "Don't Know" )
	  
			 {
			   delete(dogChoice[i]);
			   
			   delete(dogAttribute[i]);
			   
			   		    
			  }

			  
	  
	  }
	   
	  
	 
	    
	  dogChoice = dogChoice.filter(Boolean);   //Gets rid of empty space.
      dogAttribute = dogAttribute.filter(Boolean);
	  
	  
	   for (var i = 0; i < dogAttribute.length; i++){
		
		   
		   dogAttribute[i].forEach(function(item,index){
			   
			   if (dogChoice[i] == item){
						
						   collectDog.push(index);
						   
						   }
	     
				
		   });
		   
			   
		  }

	  //alert(collectDog);
	  
	  function count() {
                      

                 collectDog.sort();

                 var current = null;
                 var cnt = 0;
                 
				 for (var i = 0; i < collectDog.length; i++) {
                 if (collectDog[i] != current) {
                 if (cnt == dogChoice.length) {
                  finalDog.push(current);
				//alert(finalDog);
                 }
                current = collectDog[i];
                cnt = 1;
                } else {
                cnt++;
                }
              }
           }
	  
	 // alert(dogChoice);
  	 

	  
	  for (var i =0; i < Dog.length; i++){ 
   
        
	   
  
	  if (sizeDog == Size[i] && coatDog == Coat[i] && energyDog == Energy[i] && childrenDog == Children[i])
	  
			 {
			  
			  finalDog.push(i);
			 
			 
			  }
			
			  else if(dogAttribute.length && dogChoice.length < 4){
				  
				  count();
				  break;
				  
			
				  }	 
				    
				   //i++;
			  
	  }//end loop
	  
	  
	
	  
	  
	  /*dogChoice = dogChoice.filter(Boolean);   //Gets rid of empty space.
      dogAttribute = dogAttribute.filter(Boolean);
	  
	  
	  alert(dogChoice);
  	  alert (dogAttribute);*/
	  
   
   if (finalDog == ''){
	  
	  showPage.innerHTML='Sorry but no matches were found. Please try again!' + ' ';
	  showPage.style.background='red';
	  
	  }
	 
  
	 else if (finalDog.length > 1){
		  
		  for (i=0; i < finalDog.length; i++){
			  
			  showPage.innerHTML+='You have chosen this dog: '+ Dog[finalDog[i]] + " " + Dogpic[finalDog[i]] + '<br>';//NOTE += USED IN THIS CASE SO MULTIPLE RESULTS CAN BE SHOWN.
			  showPage.style.background='blue';
		   } 
			  
	  } 
	
	  
	  
  else {
	  
	  
		 showPage.innerHTML='You have chosen '+ Dog[finalDog] + " " + Dogpic[finalDog] + '<br>';
		 showPage.style.background='blue';
	   
  }
  
  
  
	  
  
  
  
	 
  }//End function.
  
  
  
  
  var btn = document.getElementById('btn_submit');
  if(btn.addEventListener){
	  btn.addEventListener('click', submitdetails, false);
  }else {
	  btn.attachEvent('onclick',submitdetails);
	  
  }
  
  
  
  
  
  }