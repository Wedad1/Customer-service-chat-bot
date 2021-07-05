
    var sl = document.getElementById("Range");
    var op = document.getElementById("S1");
    op.innerHTML = sl.value; 
    sl.oninput = function() {
      op.innerHTML = this.value
    }
    var sl2 = document.getElementById("Range2");
    var op2 = document.getElementById("S2");
    op2.innerHTML = sl2.value; 
    sl2.oninput = function() {
      op2.innerHTML = this.value
    }
    var sl3 = document.getElementById("Range3");
    var op3 = document.getElementById("S3");
    op3.innerHTML = sl3.value; 
    sl3.oninput = function() {
      op3.innerHTML = this.value
    }
    var sl4 = document.getElementById("Range4");
    var op4 = document.getElementById("S4");
    op4.innerHTML = sl4.value; 
    sl4.oninput = function() {
      op4.innerHTML = this.value
    }
    var sl5 = document.getElementById("Range5");
    var op5 = document.getElementById("S5");
    op5.innerHTML = sl5.value; 
    sl5.oninput = function() {
      op5.innerHTML = this.value
    }
    var sl6 = document.getElementById("Range6");
    var op6 = document.getElementById("S6");
    op6.innerHTML = sl6.value; 
    sl6.oninput = function() {
      op6.innerHTML = this.value
    }
    window.watsonAssistantChatOptions = {
      integrationID: "09fb0ac2-62f9-4db0-a959-16d5bb349202", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "6cc9a438-343a-4381-9418-d1dffe7acb51", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });