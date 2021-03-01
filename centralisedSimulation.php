<html>
   <head>
      <link href="stylesheet/gridStyle.css" rel="stylesheet" type="text/css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   </head>
   <div class="pg-orgchart">
      <div class="org-chart">
         <ul>
            <li>
               <div class="user">
                  <div id="live_data"></div>
                  <script>
                     // As with JSON, use the Fetch API & ES6
                     var totalDemandLoad = 0;
                     var totalLoad = 0;
                     var dValue = 0;
                     var gValue = 0;
                     var bValue = 0;
                     var availableLoad = document.getElementById('totalLoad');
                     var demandLoad = document.getElementById('demandLoad');
                     var balanceLoad = document.getElementById('availableLoad');
                     var stringArray = [];
                     fetch('ownerData.txt')
                     .then(response => response.text())
                     .then(data => {
                     // Do something with your data
                     var stringData = data;
                     stringArray = stringData.replace(/\n/g, ",").split(",");
                     });
                     var geneArrayValue = 1;
                     var dArrayValue = 2;
                     function getData() {
                     	gValue = parseInt(stringArray[geneArrayValue]);
                     	totalLoad = totalLoad+gValue;
                     	//availableLoad.innerText = "Generated(W): " + totalLoad +"W. ";
                     	geneArrayValue = geneArrayValue + 3;
                       return gValue;
                     }
                     function getDData() {
                     	dValue = parseInt(stringArray[dArrayValue]);
                     	totalDemandLoad = totalDemandLoad+dValue;
                     	//demandLoad.innerText = "Own usages(W): " + totalDemandLoad +"W. ";
                     	dArrayValue = dArrayValue + 3;
                       return dValue;
                     } 
                     function balanceData(){
                     bValue = gValue-dValue;
                     //balanceLoad.innerText = "Available for sales (W): " + bValue +"W. ";
                     }
                     function updateMySQL(){
                     var generated = gValue;  
                     var demand = dValue;
                     var balance = bValue;
                     var currentdate = new Date(); 
                     var datetime =  currentdate.getDate() + "/"
                     + (currentdate.getMonth()+1)  + "/" 
                     + currentdate.getFullYear() + " @ "  
                     + currentdate.getHours() + ":"  
                     + currentdate.getMinutes() + ":" 
                     + currentdate.getSeconds();	
                     $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:{generated:generated, demand:demand, balance:balance, datetime:datetime},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                     fetch_data();
                     }  
                     })
                     }
                     function fetch_data()  
                     {  
                     $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     success:function(data){  
                        $('#live_data').html(data);  
                     }  
                     });  
                     } 
                  </script>
               </div>
               <ul>
                  <li>
                     <div class="user">
                        <p class="address">0x4446321EF654F9fe36a92D7ffa49584A8FD70f0a</p>
                        <img src="img/MsB.jpg" class="img-responsive" />
                        <div class="name">Ms. B</div>
                        <div class="role">Customer #1</div>
                        <div id="live_data_customer1"></div>
                        <script>
                           // As with JSON, use the Fetch API & ES6
                           var address1 ="";
                           var usagesValue1= 0;
                           var billed1 =0;
                           var payable1 = 0;
                           var stringArray1 = [];
                           fetch('customerData1.txt')
                           .then(response => response.text())
                           .then(data => {
                           // Do something with your data
                           var stringData = data;
                           stringArray1 = stringData.replace(/\n/g, ",").split(",");
                           });
                           var usagesArrayValue1 = 1;
                           var addressArrayValue1 = 2;
                           function getC1UsagesData() {
                           	usagesValue1 = parseInt(stringArray1[usagesArrayValue1]);
                           	usagesArrayValue1 = usagesArrayValue1 + 3;
                             return usagesValue1;
                           }
                           function getC1AddressData() {
                           address1= stringArray1[addressArrayValue1];
                           address1 = address1.toLowerCase();
                           	addressArrayValue1 = addressArrayValue1 + 3;
                             return address1;
                           } 
                           function updateC1SQL(){
                           var usages= usagesValue1;  
                           var bill1 = billed1;
                           var pay1 = payable1;
                           var add1 = address1;
                           var currentdate = new Date(); 
                           var datetime1 =  currentdate.getDate() + "/"
                           + (currentdate.getMonth()+1)  + "/" 
                           + currentdate.getFullYear() + " @ "  
                           + currentdate.getHours() + ":"  
                           + currentdate.getMinutes() + ":" 
                           + currentdate.getSeconds();	
                           $.ajax({  
                           url:"customer1Insert.php",  
                           method:"POST",  
                           data:{address:address1, usages:usagesValue1, tempUsages:usagesValue1, billed:bill1, paid:pay1,dateTime:datetime1},  
                           dataType:"text",  
                           success:function(data)  
                           {  
                           fetch_customer1_data();
                           }  
                           })
                           }
                           function fetch_customer1_data()  
                           {  
                           $.ajax({  
                           url:"customer1Select.php",  
                           method:"POST",  
                           success:function(data){  
                              $('#live_data_customer1').html(data);  
                           }  
                           });  
                           } 
                        </script>
                     </div>
                  </li>
                  <li>
                     <div class="user">
                        <p class="address">0x0ee4437b716fF015c5c261d0F5513b190DEF1b15</p>
                        <img src="img/MrC.jpg" class="img-responsive" />
                        <div class="name">Mr. C</div>
                        <div class="role">Neighbour #2</div>
                        <div id="live_data_customer2"></div>
                        <script>
                           // As with JSON, use the Fetch API & ES6
                           var address2="";
                           var usagesValue2= 0;
                           var billed2 =0;
                           var payable2 = 0;
                           var stringArray2 = [];
                           fetch('customerData2.txt')
                           .then(response => response.text())
                           .then(data => {
                           // Do something with your data
                           var stringData = data;
                           stringArray2 = stringData.replace(/\n/g, ",").split(",");
                           });
                           var usagesArrayValue2 = 1;
                           var addressArrayValue2 = 2;
                           function getC2UsagesData() {
                           	usagesValue2 = parseInt(stringArray2[usagesArrayValue2]);
                           	usagesArrayValue2 = usagesArrayValue2 + 3;
                             return usagesValue2;
                           }
                           function getC2AddressData() {
                           address2= stringArray2[addressArrayValue2];
                           address2 = address2.toLowerCase();
                           	addressArrayValue2 = addressArrayValue2 + 3;
                             return address2;
                           } 
                           function updateC2SQL(){
                           var usages= usagesValue2;  
                           var bill2 = billed2;
                           var pay2 = payable2;
                           var add2 = address2;
                           var currentdate = new Date(); 
                           var datetime2 =  currentdate.getDate() + "/"
                           + (currentdate.getMonth()+1)  + "/" 
                           + currentdate.getFullYear() + " @ "  
                           + currentdate.getHours() + ":"  
                           + currentdate.getMinutes() + ":" 
                           + currentdate.getSeconds();	
                           $.ajax({  
                           url:"customer1Insert.php",  
                           method:"POST",  
                           data:{address:address2, usages:usagesValue2, tempUsages:usagesValue2, billed:bill2, paid:pay2,dateTime:datetime2},  
                           dataType:"text",  
                           success:function(data)  
                           {  
                           fetch_customer2_data();
                           }  
                           })
                           }
                           function fetch_customer2_data()  
                           {  
                           $.ajax({  
                           url:"customer2Select.php",  
                           method:"POST",  
                           success:function(data){  
                              $('#live_data_customer2').html(data);  
                           }  
                           });  
                           } 
                        </script>
                     </div>
                  </li>
                  <li>
                     <div class="user">
                        <p class="address">0x1A339DDBCD788Fda03312788d25b514Ad72aE209</p>
                        <img src="img/MrD.jpg" class="img-responsive" />
                        <div class="name">Mr. D</div>
                        <div class="role">Neighbour #3</div>
                        <div id="live_data_customer3"></div>
                        <script>
                           // As with JSON, use the Fetch API & ES6
                           var address3="";
                           var usagesValue3= 0;
                           var billed3 =0;
                           var payable3 = 0;
                           var stringArray3 = [];
                           fetch('customerData3.txt')
                           .then(response => response.text())
                           .then(data => {
                           // Do something with your data
                           var stringData = data;
                           stringArray3 = stringData.replace(/\n/g, ",").split(",");
                           });
                           var usagesArrayValue3 = 1;
                           var addressArrayValue3 = 2;
                           function getC3UsagesData() {
                           	usagesValue3 = parseInt(stringArray3[usagesArrayValue3]);
                           	usagesArrayValue3 = usagesArrayValue3 + 3;
                             return usagesValue3;
                           }
                           function getC3AddressData() {
                           address3= stringArray3[addressArrayValue3];
                           address3 = address3.toLowerCase();
                           	addressArrayValue3 = addressArrayValue3 + 3;
                             return address3;
                           } 
                           function updateC3SQL(){
                           var usages= usagesValue3;  
                           var bill3 = billed3;
                           var pay3 = payable3;
                           var add3 = address3;
                           var currentdate = new Date(); 
                           var datetime3 =  currentdate.getDate() + "/"
                           + (currentdate.getMonth()+1)  + "/" 
                           + currentdate.getFullYear() + " @ "  
                           + currentdate.getHours() + ":"  
                           + currentdate.getMinutes() + ":" 
                           + currentdate.getSeconds();	
                           $.ajax({  
                           url:"customer1Insert.php",  
                           method:"POST",  
                           data:{address:address3, usages:usagesValue3, tempUsages:usagesValue3, billed:bill3, paid:pay3,dateTime:datetime3},  
                           dataType:"text",  
                           success:function(data)  
                           {  
                           fetch_customer3_data();
                           }  
                           })
                           }
                           function fetch_customer3_data()  
                           {  
                           $.ajax({  
                           url:"customer3Select.php",  
                           method:"POST",  
                           success:function(data){  
                              $('#live_data_customer3').html(data);  
                           }  
                           });  
                           } 
                        </script>
                     </div>
                  </li>
                  <li>
                     <div class="user">
                        <p class="address">0x3075BC64d402b33d9dBb06af020d948C492b0359</p>
                        <img src="img/MsE.jpg" class="img-responsive" />
                        <div class="name">Ms. E</div>
                        <div class="role">Neighbour #4</div>
                        <div id="live_data_customer4"></div>
                        <script>
                           // As with JSON, use the Fetch API & ES6
                           var address4="";
                           var usagesValue4= 0;
                           var billed4 =0;
                           var payable4 = 0;
                           var stringArray4 = [];
                           fetch('customerData4.txt')
                           .then(response => response.text())
                           .then(data => {
                           // Do something with your data
                           var stringData = data;
                           stringArray4 = stringData.replace(/\n/g, ",").split(",");
                           });
                           var usagesArrayValue4 = 1;
                           var addressArrayValue4 = 2;
                           function getC4UsagesData() {
                           	usagesValue4 = parseInt(stringArray4[usagesArrayValue4]);
                           	usagesArrayValue4 = usagesArrayValue4 + 3;
                             return usagesValue4;
                           }
                           function getC4AddressData() {
                           address4= stringArray4[addressArrayValue4];
                           address4 = address4.toLowerCase();
                           	addressArrayValue4 = addressArrayValue4 + 3;
                             return address4;
                           } 
                           function updateC4SQL(){
                           var usages= usagesValue4;  
                           var bill4 = billed4;
                           var pay4 = payable4;
                           var add4 = address4;
                           var currentdate = new Date(); 
                           var datetime4 =  currentdate.getDate() + "/"
                           + (currentdate.getMonth()+1)  + "/" 
                           + currentdate.getFullYear() + " @ "  
                           + currentdate.getHours() + ":"  
                           + currentdate.getMinutes() + ":" 
                           + currentdate.getSeconds();	
                           $.ajax({  
                           url:"customer1Insert.php",  
                           method:"POST",  
                           data:{address:address4, usages:usagesValue4, tempUsages:usagesValue4, billed:bill4, paid:pay4,dateTime:datetime4},  
                           dataType:"text",  
                           success:function(data)  
                           {  
                           fetch_customer4_data();
                           }  
                           })
                           }
                           function fetch_customer4_data()  
                           {  
                           $.ajax({  
                           url:"customer4Select.php",  
                           method:"POST",  
                           success:function(data){  
                              $('#live_data_customer4').html(data);  
                           }  
                           });  
                           } 
                        </script>
                     </div>
                  </li>
                  <li>
                     <div class="user">
                        <p class="address">0x9c8cBB88f1a8552FF683ffdDAF598f6D9D0115Fd</p>
                        <img src="img/MsF.jpg" class="img-responsive" />
                        <div class="name">Ms. F</div>
                        <div class="role">Neighbour #5</div>
                        <div id="live_data_customer5"></div>
                        <script>
                           // As with JSON, use the Fetch API & ES6
                           var address5="";
                           var usagesValue5= 0;
                           var billed5 =0;
                           var payable5 = 0;
                           var stringArray5 = [];
                           fetch('customerData5.txt')
                           .then(response => response.text())
                           .then(data => {
                           // Do something with your data
                           var stringData = data;
                           stringArray5 = stringData.replace(/\n/g, ",").split(",");
                           });
                           var usagesArrayValue5 = 1;
                           var addressArrayValue5 = 2;
                           function getC5UsagesData() {
                           	usagesValue5 = parseInt(stringArray5[usagesArrayValue5]);
                           	usagesArrayValue5 = usagesArrayValue5 + 3;
                             return usagesValue5;
                           }
                           function getC5AddressData() {
                           address5= stringArray5[addressArrayValue5];
                           address5 = address5.toLowerCase();
                           	addressArrayValue5 = addressArrayValue5 + 3;
                             return address5;
                           } 
                           function updateC5SQL(){
                           var usages= usagesValue5;  
                           var bill5 = billed5;
                           var pay5 = payable5;
                           var add5 = address5;
                           var currentdate = new Date(); 
                           var datetime5 =  currentdate.getDate() + "/"
                           + (currentdate.getMonth()+1)  + "/" 
                           + currentdate.getFullYear() + " @ "  
                           + currentdate.getHours() + ":"  
                           + currentdate.getMinutes() + ":" 
                           + currentdate.getSeconds();	
                           $.ajax({  
                           url:"customer1Insert.php",  
                           method:"POST",  
                           data:{address:address5, usages:usagesValue5, tempUsages:usagesValue5, billed:bill5, paid:pay5,dateTime:datetime5},  
                           dataType:"text",  
                           success:function(data)  
                           {  
                           fetch_customer5_data();
                           }  
                           })
                           }
                           function fetch_customer5_data()  
                           {  
                           $.ajax({  
                           url:"customer5Select.php",  
                           method:"POST",  
                           success:function(data){  
                              $('#live_data_customer5').html(data);  
                           }  
                           });  
                           } 
                        </script>
                     </div>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
   <div id="buttonWrap">
      <button data-type="square" onclick="window.open('./centralisedDBContract.php')">Enter Energy Trading Smart Contracts for Billing</button>
   </div>
   <span class="preloader"></span>
   <script>
      function pop (e) {
        let amount = 30;
        switch (e.target.dataset.type) {
          case 'shadow':
          case 'line':
            amount = 60;
            break;
        }
        // Quick check if user clicked the button using a keyboard
        if (e.clientX === 0 && e.clientY === 0) {
          const bbox = e.target.getBoundingClientRect();
          const x = bbox.left + bbox.width / 2;
          const y = bbox.top + bbox.height / 2;
          for (let i = 0; i < 30; i++) {
            // We call the function createParticle 30 times
            // We pass the coordinates of the button for x & y values
            createParticle(x, y, e.target.dataset.type);
          }
        } else {
          for (let i = 0; i < amount; i++) {
            createParticle(e.clientX, e.clientY + window.scrollY, e.target.dataset.type);
          }
        }
      }
      function createParticle (x, y, type) {
        const particle = document.createElement('particle');
        document.body.appendChild(particle);
        let width = Math.floor(Math.random() * 30 + 8);
        let height = width;
        let destinationX = (Math.random() - 0.5) * 300;
        let destinationY = (Math.random() - 0.5) * 300;
        let rotation = Math.random() * 520;
        let delay = Math.random() * 200;
        
        switch (type) {
          case 'square':
            particle.style.background = `hsl(${Math.random() * 90 + 270}, 70%, 60%)`;
            particle.style.border = '1px solid white';
            break;
          case 'emoji':
            particle.innerHTML = ['❤','🧡','💛','💚','💙','💜','🤎'][Math.floor(Math.random() * 7)];
            particle.style.fontSize = `${Math.random() * 24 + 10}px`;
            width = height = 'auto';
            break;
          case 'mario':
            particle.style.backgroundImage = 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/127738/mario-face.png)';
            break;
          case 'shadow':
            var color = `hsl(${Math.random() * 90 + 90}, 70%, 50%)`;
            particle.style.boxShadow = `0 0 ${Math.floor(Math.random() * 10 + 10)}px ${color}`;
            particle.style.background = color;
            particle.style.borderRadius = '50%';
            width = height = Math.random() * 5 + 4;
            break;
          case 'line':
            var color = `hsl(${Math.random() * 90 + 90}, 70%, 50%)`;
            particle.style.background = 'black';
            height = 1;
            rotation += 1000;
            delay = Math.random() * 1000;
            break;
        }
        
        particle.style.width = `${width}px`;
        particle.style.height = `${height}px`;
        const animation = particle.animate([
          {
            transform: `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(0deg)`,
            opacity: 1
          },
          {
            transform: `translate(-50%, -50%) translate(${x + destinationX}px, ${y + destinationY}px) rotate(${rotation}deg)`,
            opacity: 0
          }
        ], {
          duration: Math.random() * 1000 + 5000,
          easing: 'cubic-bezier(0, .9, .57, 1)',
          delay: delay
        });
        animation.onfinish = removeParticle;
      }
      function removeParticle (e) {
        e.srcElement.effect.target.remove();
      }
      
      if (document.body.animate) {
        document.querySelectorAll('button').forEach(button => button.addEventListener('click', pop));
      }
   </script>
   <script>
      var seconds = 0;
      var allocated1=0;
      var allocated2=0;
      var allocated3=0;
      var allocated4=0
      var allocaated5=0;
      var totalAvailBalance=0;
      var totalUsagesC1 = 0;
      var totalUsagesC2 = 0;
      var totalUsagesC3 = 0;
      var totalUsagesC4 = 0;
      var totalUsagesC5 = 0;
      function allocationWatts(addressInput,billedInput,offsetInput){
      var currentdate = new Date(); 
      var datetime =  currentdate.getDate() + "/"
      + (currentdate.getMonth()+1)  + "/" 
      + currentdate.getFullYear() + " @ "  
      + currentdate.getHours() + ":"  
      + currentdate.getMinutes() + ":" 
      + currentdate.getSeconds();	
      $.ajax({  
      url:"customer1Insert.php",  
      method:"POST",  
      data:{address:addressInput, usages:0, tempUsages:offsetInput, billed:billedInput, paid:0,dateTime:datetime},  
      dataType:"text",  
      success:function(data)  
      {  
      }  
      })
      } 
      function updateAllocationOwner(balanceInput){
      var currentdate = new Date(); 
      var datetime =  currentdate.getDate() + "/"
      + (currentdate.getMonth()+1)  + "/" 
      + currentdate.getFullYear() + " @ "  
      + currentdate.getHours() + ":"  
      + currentdate.getMinutes() + ":" 
      + currentdate.getSeconds();	
      $.ajax({  
      url:"insert.php",  
      method:"POST",  
      data:{generated:0, demand:0, balance:balanceInput, datetime:datetime},  
      dataType:"text",  
      success:function(data)  
      {  
      fetch_data();
      }  
      })
      }
      function getTotalOwnerBalance(){
      $.ajax({  
      url:"getTotalAvailable.php",  
      method:"POST",  
      success:function(data){  
       totalAvailBalance = data;
      }  
      });			
      }
      function getTotalC1Usages(){
      $.ajax({  
      url:"getC1Uses.php",  
      method:"POST",  
      success:function(data){  
       totalUsagesC1 = data;
      }  
      });
      }
      function getTotalC2Usages(){
      $.ajax({  
      url:"getC2Uses.php",  
      method:"POST",  
      success:function(data){  
       totalUsagesC2 = data;
      }  
      });
      }
      function getTotalC3Usages(){
      $.ajax({  
      url:"getC3Uses.php",  
      method:"POST",  
      success:function(data){  
       totalUsagesC3 = data;
      }  
      });
      }
      function getTotalC4Usages(){
      $.ajax({  
      url:"getC4Uses.php",  
      method:"POST",  
      success:function(data){  
      totalUsagesC4 = data;
      }  
      });
      }
      function getTotalC5Usages(){
      $.ajax({  
      url:"getC5Uses.php",  
      method:"POST",  
      success:function(data){  
       totalUsagesC5 = data;
      
      }  
      });
      }				
      function incrementSeconds() {
      	seconds += 1;
      getData();
      getDData();
      balanceData();
      updateMySQL();
      console.log(seconds);
      getC1UsagesData();
      getC1AddressData();
      updateC1SQL();
      
      getC2UsagesData();
      getC2AddressData();
      updateC2SQL();
      
      getC3UsagesData();
      getC3AddressData();
      updateC3SQL();
      
      getC4UsagesData();
      getC4AddressData();
      updateC4SQL();
      
      getC5UsagesData();
      getC5AddressData();
      updateC5SQL();
      
      getTotalC1Usages();
      getTotalC2Usages();
      getTotalC3Usages();
      getTotalC4Usages();
      getTotalC5Usages();
      getTotalOwnerBalance();
      
      
      if(seconds % 600 == 0){
      var ratio1 =0;
      var ratio2 =0;
      var ratio3 =0;
      var ratio4 =0;
      var ratio5 =0;
      
      var allocated1 = 0;
      var allocated2 = 0;
      var allocated3 = 0;
      var allocated4 = 0;
      var allocated5 = 0;
      
      var offset1=0;
      var offset2=0;
      var offset3=0;
      var offset4=0;
      var offset5=0;
      
      var totalAllocated = 0;
      
      total5Usages = parseInt(totalUsagesC1)+parseInt(totalUsagesC2)+parseInt(totalUsagesC3)+parseInt(totalUsagesC4)+parseInt(totalUsagesC5);
      console.log(total5Usages);
      ratio1 = totalUsagesC1/total5Usages;
      ratio2 = totalUsagesC2/total5Usages;
      ratio3 = totalUsagesC3/total5Usages;
      ratio4 = totalUsagesC4/total5Usages;
      ratio5 = totalUsagesC5/total5Usages;
      allocated1 = parseInt(ratio1* parseInt(totalAvailBalance));
      allocated2 = parseInt(ratio2* parseInt(totalAvailBalance));
      allocated3 = parseInt(ratio3* parseInt(totalAvailBalance));
      allocated4 = parseInt(ratio4* parseInt(totalAvailBalance));
      allocated5 = parseInt(ratio5* parseInt(totalAvailBalance));
      
      
      totalAllocated = 0 - allocated1 - allocated2 - allocated3 - allocated4- allocated5;
      offset1 = 0-parseInt(totalUsagesC1);
      offset2 = 0-parseInt(totalUsagesC2);
      offset3 = 0-parseInt(totalUsagesC3);
      offset4 = 0-parseInt(totalUsagesC4);
      offset5 = 0-parseInt(totalUsagesC5);
      
      allocationWatts(address1,allocated1, offset1);
      allocationWatts(address2,allocated2, offset2);
      allocationWatts(address3,allocated3, offset3);
      allocationWatts(address4,allocated4, offset4);
      allocationWatts(address5,allocated5, offset5);
      updateAllocationOwner(totalAllocated);
      console.log("Power distributed to customer!");
      
      }
      }
      var cancel = setInterval(incrementSeconds, 1000);
   </script>
</html>