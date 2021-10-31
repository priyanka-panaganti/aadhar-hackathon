
<style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,300;0,500;0&display=swap');

:root {
  /* Colors by color */
  --grey: 45,55,72;
  --greyText: 219, 219, 219;
  
  --red: 229,62,62;
  --redText: 255, 230, 230;
  
  --green: 72,187,120;
  --greenText: 198,246,213;
  
  --blue: 66,153,225;
  --blueText: 190,227,248;
  
  --yellow: 236,201,75;
  --yellowText: 254,252,191;
  
  /* Colors by function */
  --color: var(--grey);
  --textColor: var(--greyText);
  
  /* Other Stuff */
  --alertBorderRadius: 20px;
  --alertGlareDelay: 0;
}


.alert__header {
  border-radius: 20px 20px 0 0;
  text-align: center;
  height:20px;
  display: flex;
  align-items: center;
  color: rgba(255,255,255,0.8);
  padding: 15px 25px 20px 25px;
  position: relative;
  font-weight: bold;
  background: linear-gradient(-45deg, rgba(var(--color),0.22), rgba(var(--color),0.25));
  text-transform: uppercase;
  text-shadow: 0 0 10px rgba(var(--color), 0.3),
               0 0 5px rgba(var(--color), 0.4),
               0 0 2px rgba(var(--color), 0.5);
}

.alert__header span + span {
  margin-left: 15px;
  text-align: center;
}




.alert.success {
  --color: var(--green);
  --textColor: var(--blacktext);
  --alertGlareDelay: 0.35s;
  text-align: center;

}


.alert {
  max-width: 530px;
  text-align: center;
  background: linear-gradient(
    -45deg, 
    rgba(var(--color),0.22), 
    rgba(var(--color),0.25)
  );
  color: rgba( var(--textColor), 1 );
  font-weight: 300;
  line-height: 1.65em;
  letter-spacing: 1.5px;
  border-radius: var(--alertBorderRadius);
  position: relative;
  transition: transform .3s ease;
  z-index: 1;
}


/* Shadow */
.alert::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0.7;
  border-radius: var(--alertBorderRadius);
  box-shadow: 
    8px 8px 8px 0 rgba(0, 0, 0, 0.25),
    inset 7px 7px 8px 0 rgba(255, 255, 255, 0.3);
  transition: opacity .5s ease, box-shadow .4s ease;
}
.alert:hover::before {
  opacity: 1;
  box-shadow: 
    12px 12px 16px 0 rgba(0, 0, 0, 0.25),
    inset 6px 6px 12px 0 rgba(255, 255, 255, 0.3);
}






.alert.success .alert__header::after {
    width: 100%;
    left: 0;
    text-align: center;
    animation: successAnimation 0.6s linear infinite;
}
@keyframes successAnimation {
  0%, 100% {
    opacity: 1;
  }
  25%, 75% {
    background-color: rgba(var(--textColor),0.7);
  }
  50% {
    opacity: 1;
  }
}


.alert h3 {
  margin: 0;
  display: flex;
  text-align: center;
}

.alert h3 span:nth-child(1){
  font-size: 1.6em;
}
.alert h3 {
  animation: pulseAnimation 3s linear infinite;
}
@keyframes pulseAnimation {
  0% {
    opacity: 0.7;
  }
  70% {
    opacity: 0.8;
  }
  73% {
    opacity: 1;
    text-shadow: 
      0 0 10px rgba(var(--color),0.5),
      0 0 5px rgba(var(--color),0.5);
  }
  100% {
    opacity: 0.7;
  }
}

    </style>




<article class="alert success">
    <div class="alert__wrapper">    
      <div class="alert__header">
        <h3>
          <span>
            <i class="fa fa-check"></i>
          </span> 
          <span>Success! You did it.</span>
        </h3>
      </div>
    </div>
  </article>