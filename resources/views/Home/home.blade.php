/* =========================================================
   OFERTAS - CARRUSEL HORIZONTAL SIN JAVASCRIPT
========================================================= */

.offers-section {
    padding: 85px 0 75px;
}

.offers-header {
    display: flex;
    align-items: end;
    justify-content: space-between;
    margin-bottom: 30px;
}

.offers-header .section-heading {
    text-align: left;
    margin: 0;
}

.offers-header .section-heading p {
    margin: 0;
}

.offers-count {
    background: white;
    border: 1px solid #e0e9dc;
    padding: 10px 17px;
    border-radius: 30px;
    color: #52734c;
    font-size: .9rem;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0,0,0,.04);
}


/* CONTENEDOR DEL CARRUSEL */

.offers-carousel-wrapper {
    position: relative;
}


/* FILA HORIZONTAL */

.offers-carousel {
    display: flex;
    gap: 25px;

    overflow-x: auto;

    padding: 10px 5px 30px;

    scroll-snap-type: x mandatory;

    scrollbar-width: thin;
    scrollbar-color: #b7cdb0 transparent;
}


/* BARRA DE DESPLAZAMIENTO */

.offers-carousel::-webkit-scrollbar {
    height: 7px;
}

.offers-carousel::-webkit-scrollbar-track {
    background: #e9eee7;
    border-radius: 20px;
}

.offers-carousel::-webkit-scrollbar-thumb {
    background: #b7cdb0;
    border-radius: 20px;
}

.offers-carousel::-webkit-scrollbar-thumb:hover {
    background: #39a900;
}


/* =========================================================
   TARJETA
========================================================= */

.offer-card {
    flex: 0 0 350px;

    background: white;

    border-radius: 25px;

    overflow: hidden;

    border: 1px solid #e3eadf;

    box-shadow:
        0 10px 28px rgba(39,72,44,.08);

    transition: .3s ease;

    scroll-snap-align: start;
}

.offer-card:hover {
    transform: translateY(-7px);

    box-shadow:
        0 22px 45px rgba(39,72,44,.16);

    border-color: #c8ddc1;
}


/* =========================================================
   IMAGEN
========================================================= */

.offer-image-wrapper {
    height: 205px;

    position: relative;

    overflow: hidden;
}

.offer-image {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: .4s;
}

.offer-card:hover .offer-image {
    transform: scale(1.06);
}

.offer-image-overlay {
    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.02),
            rgba(0,0,0,.48)
        );
}


/* =========================================================
   MODALIDAD
========================================================= */

.offer-modality {
    position: absolute;

    top: 15px;
    left: 15px;

    background: white;

    color: #347a20;

    padding: 7px 13px;

    border-radius: 30px;

    font-size: .78rem;

    font-weight: 700;

    box-shadow:
        0 5px 15px rgba(0,0,0,.15);
}


/* =========================================================
   CONTENIDO
========================================================= */

.offer-body {
    padding: 23px;
}

.offer-area {
    color: #6c9b5f;

    font-size: .75rem;

    font-weight: 700;

    text-transform: uppercase;

    margin-bottom: 8px;
}

.offer-title {
    color: #234b2b;

    font-size: 1.28rem;

    font-weight: 800;

    line-height: 1.3;

    margin-bottom: 10px;

    min-height: 50px;
}

.offer-description {
    color: #737b75;

    font-size: .88rem;

    line-height: 1.6;

    margin-bottom: 18px;

    display: -webkit-box;

    -webkit-line-clamp: 2;

    -webkit-box-orient: vertical;

    overflow: hidden;
}


/* =========================================================
   DATOS
========================================================= */

.offer-details {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 9px;

    margin-bottom: 18px;
}

.offer-detail {
    background: #f4f8f1;

    border-radius: 12px;

    padding: 10px;
}

.offer-detail i {
    color: #39a900;

    margin-right: 4px;
}

.offer-detail small {
    display: block;

    color: #8a918c;

    font-size: .67rem;

    margin-bottom: 3px;
}

.offer-detail strong {
    color: #43564a;

    font-size: .77rem;
}


/* =========================================================
   CENTRO
========================================================= */

.offer-center {
    display: flex;

    align-items: flex-start;

    gap: 8px;

    color: #68736b;

    font-size: .8rem;

    margin-bottom: 17px;

    min-height: 38px;
}

.offer-center i {
    color: #39a900;

    font-size: 1rem;

    margin-top: 2px;
}


/* =========================================================
   BOTÓN
========================================================= */

.offer-button {
    width: 100%;

    border: none;

    background: #edf6e9;

    color: #347a20;

    padding: 12px;

    border-radius: 13px;

    font-weight: 700;

    transition: .25s;
}

.offer-button:hover {
    background: #39a900;

    color: white;
}


/* =========================================================
   TEXTO DE DESLIZAMIENTO
========================================================= */

.carousel-scroll-info {
    text-align: center;

    color: #7c877e;

    font-size: .8rem;

    margin-top: 5px;
}

.carousel-scroll-info i {
    color: #39a900;
}


/* =========================================================
   SIN RESULTADOS
========================================================= */

.empty-offers {
    background: white;

    border-radius: 25px;

    padding: 55px 25px;

    text-align: center;

    box-shadow:
        0 10px 30px rgba(0,0,0,.06);
}

.empty-icon {
    width: 80px;
    height: 80px;

    background: #e7f3df;

    color: #39a900;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    margin: 0 auto 20px;

    font-size: 2rem;
}
