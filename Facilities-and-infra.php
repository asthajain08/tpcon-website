<?php require('header.php');?>
 <style>
           @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

:root {
  /* Colors */
  --brand-color: hsl(46, 100%, 50%);
  --black: hsl(0, 0%, 0%);
  --white: hsl(0, 0%, 100%);
  /* Fonts */
  --font-title: "Montserrat", sans-serif;
  --font-text: "Lato", sans-serif;
}

/* RESET */

/* Box sizing rules */

/* Remove default margin */

/* GLOBAL STYLES */
.structure {
  display: grid;
  place-items: center;
  margin-top: 60px;
}

.card__title {
  font-size: 2.25rem;
  font-family: var(--font-title);
  color: var(--white);
  line-height: 1.1;
  margin: 0;
}

.card__description{
  font-family: var(--font-text);
  font-size: 1rem;
  line-height: 1.5;
  color: var(--white);
  margin: 0;
}

.flow > * + * {
  margin-top: var(--flow-space, 1em);
}

/* CARD COMPONENT */

.card {
  display: grid;
  place-items: center;

  max-width: 21.875rem;
  
  overflow: hidden;
  border-radius: 0.625rem;
  box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
  flex: 0 0 calc(33% - 10px);
}


.cardrow {
  display: flex;
  justify-content: space-between;
  margin-bottom: 60px;
 
}

@media (max-width: 576px) {
    .cardrow {
      flex-direction: column; /* Stack cards in a single column */
    }
  }

  /* Add a media query for small (sm) view */
  @media (min-width: 576px) and (max-width: 1400px) {
     .cardrow {
      flex-wrap: wrap; /* Allow cards to wrap into a new row */
    }
    .card {
      flex: 0 0 calc(50% - 10px); /* Show two cards in a row */
      margin-bottom: 20px;
     
      margin-left: 30px;
      margin-right: 10px; /* Add some margin between cards */
    }
    
  }

.card > * {
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

.card__background {
  object-fit: cover;
  max-width: 100%;
  height: 100%;
}

.card__content {
  --flow-space: 0.9375rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-self: flex-end;
  height: 85%;
  padding: 12% 1.25rem 1.875rem;
  background: linear-gradient(
    180deg,
    hsla(0, 0%, 0%, 0) 0%,
    hsla(0, 0%, 0%, 0.3) 10%,
    hsl(0, 0%, 0%) 100%
  );
}

.card__content--container {
  --flow-space: 1.25rem;
}

.card__title {
  position: relative;
  width: fit-content;
  width: -moz-fit-content; /* Prefijo necesario para Firefox  */
}

.card__title::after {
  content: "";
  position: absolute;
  height: 0.3125rem;
  width: calc(100% + 1.25rem);
  bottom: calc((1.25rem - 0.5rem) * -1);
  left: -1.25rem;
  background-color: var(--brand-color);
}

.card__button {
  padding: 0.75em 1.6em;
  width: 100px;
  height: 40px;
  font-variant: small-caps;
  font-weight: bold;
  border-radius: 0.45em;
  border: none;
  background-color: var(--brand-color);
  font-size:13.5px;
  color: var(--black);
}

.card__button:focus {
  outline: 2px solid black;
  outline-offset: -5px;
}

@media (any-hover: hover) and (any-pointer: fine) {
  .card__content {
    transform: translateY(62%);
    transition: transform 500ms ease-out;
    transition-delay: 500ms;
  }

  .card__title::after {
    opacity: 0;
    transform: scaleX(0);
    transition: opacity 1000ms ease-in, transform 500ms ease-out;
    transition-delay: 500ms;
    transform-origin: right;
  }

  .card__background {
    transition: transform 500ms ease-in;
  }

  .card__content--container > :not(.card__title),
  .card__button {
    opacity: 0;
    transition: transform 500ms ease-out, opacity 500ms ease-out;
  }

  .card:hover,
  .card:focus-within {
    transform: scale(1.05);
    transition: transform 500ms ease-in;
  }

  .card:hover .card__content,
  .card:focus-within .card__content {
    transform: translateY(0);
    transition: transform 500ms ease-in;
  }

  .card:focus-within .card__content {
    transition-duration: 0ms;
  }

  .card:hover .card__background,
  .card:focus-within .card__background {
    transform: scale(1.3);
  }

  .card:hover .card__content--container > :not(.card__title),
  .card:hover .card__button,
  .card:focus-within .card__content--container > :not(.card__title),
  .card:focus-within .card__button {
    opacity: 1;
    transition: opacity 500ms ease-in;
    transition-delay: 1000ms;
  }

  .card:hover .card__title::after,
  .card:focus-within .card__title::after {
    opacity: 1;
    transform: scaleX(1);
    transform-origin: left;
    transition: opacity 500ms ease-in, transform 500ms ease-in;
    transition-delay: 500ms;
  }
}

     </style>


     <title>Facilites And Infrastructure</title>
</head>
<style>
     *,
     *::before,
     *::after {
          box-sizing: border-box;
     }
</style>
     <div class="structure">
          <div class="row cardrow">
               <article class="card">
                    <img class="card__background" src="image/infra2.jpg"
                         alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                         />
                    <div class="card__content | flow">
                         <div class="card__content--container | flow">
                              <h2 class="card__title">Library</h2>
                              <p class="card__description">
                                   In the heart of every library lies the key to infinite realms of knowledge, where imagination soars and dreams find their wings.
                              </p>
                         </div>
                         <a href="library.php"><button class="card__button">Explore</button></a>
                    </div>
               </article>

               <!--<article class="card">
                    <img class="card__background" src="image/infra4.jpg"
                         alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          />
                    <div class="card__content | flow">
                         <div class="card__content--container | flow">
                              <h2 class="card__title">Infrastructure</h2>
                              <p class="card__description">
                                   The heart of college lies in students and faculties,but the infrastructure serves as the backbone that nurtures growth, and shapes the future.
                              </p>
                         </div>
                         <a href="infra.html"><button class="card__button">Explore</button></a>
                    </div>
               </article>-->

               <article class="card">
                    <img class="card__background" src="img/infra3.jpg"
                         alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                         width="1920" height="2193" />
                    <div class="card__content | flow">
                         <div class="card__content--container | flow">
                              <h2 class="card__title">Transport</h2>
                              <p class="card__description">
                                   Education is the passport to the future, and university transport is the vehicle that takes students on a journey towards knowledge and success.
                              </p>
                         </div>
                         <a href="Transportation.php"> <button class="card__button">Explore</button></a>
                    </div>
               </article>

               <article class="card">
                    <img class="card__background" src="image/infra1.jpg"
                         alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                        />
                    <div class="card__content | flow">
                         <div class="card__content--container | flow">
                              <h2 class="card__title">Hospital</h2>
                              <p class="card__description">
                                   Where compassion meets expertise, TMU Hospital is dedicated to nurturing health and restoring hope for all.
                              </p>
                         </div>
                         <a href="hospital.php"> <button class="card__button">Explore</button></a>
                    </div>
               </article>
          </div>

          <div class="row  cardrow">
               


               <article class="card">
                    <img class="card__background" src="img/infra5.jpg"
                         alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                         width="1920" height="2193" />
                    <div class="card__content | flow">
                         <div class="card__content--container | flow">
                              <h2 class="card__title">Sports</h2>
                              <p class="card__description">
                                   Sports: Where passion meets perseverance, and champions are forged through sweat and determination.
                              </p>
                         </div>
                         <a href="sports.php"><button class="card__button">Explore</button></a>
                    </div>
               </article>


               <article class="card ">
                    <img class="card__background" src="img/infra6.jpg"
                         alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                         width="1920" height="2193" />
                    <div class="card__content | flow">
                         <div class="card__content--container | flow">
                              <h2 class="card__title">University</h2>
                              <p class="card__description">
                                   TMU - Where Knowledge Meets Innovation, and Dreams Take Flight.
                              </p>
                         </div>
                         <a href="vision-and-mission.php"><button class="card__button">Explore</button></a>
                    </div>
               </article>
          </div>
     </div>
<?php require('footer.php');?>