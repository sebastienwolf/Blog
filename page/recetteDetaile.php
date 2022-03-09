<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="cardsDetaille">
    <div class="cards">
        <img src="../image/bruschetta.jpg" alt="">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            marie Lopez &#149; Le date &#149; Plat
        </p>
        <div class="text">
            <h3>Why do we use it?</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptatem, placeat sint vero itaque vel at fugit in culpa magnam nisi fugiat error iure repudiandae? Et eligendi aliquid at nulla!
            </p>
            <a href="./recetteDetaile.php"><button>Voir plus</button></a>
        </div>
        <div class="commentaire">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                commentaires
            </a>
        </div>
    </div>
    <section class="recetteCom">
        <h4>Laisser un commentaire</h4>
        <form action="commentaire" method="POST">
            <input type="text" name="peudo" id="" placeholder="Pseudo">
            <textarea id="story" name="story" rows="5" cols="33" placeholder="Commentaire"></textarea>
            <button>envoyer</button>
        </form>
    </section>
    <section class="recetteNew">
        <h4>Recettes récentes</h4>
        <div>
            <div class="miniCards">
                <img src="../image/bruschetta-b.jpg" alt="image">
                <div>
                    <h5>tata yoyo</h5>
                    <p>lorerm ipsum dshjdhsjhdfdfdfd</p>
                    <a href="#"><button>Voir plus</button></a>
                </div>
                <div>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        commentaires
                    </a>
                </div>
            </div>

            <div class="miniCards">
                <img src="../image/bruschetta-b.jpg" alt="image">
                <div>
                    <h5>tata yoyo</h5>
                    <p>lorerm ipsum dshjdhsjhdfdfdfd</p>
                    <a href="#"><button>Voir plus</button></a>
                </div>
                <div>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        commentaires
                    </a>
                </div>
            </div>

            <div class="miniCards">
                <img src="../image/bruschetta-b.jpg" alt="image">
                <div>
                    <h5>tata yoyo</h5>
                    <p>lorerm ipsum dshjdhsjhdfdfdfd</p>
                    <a href="#"><button>Voir plus</button></a>
                </div>
                <div>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        commentaires
                    </a>
                </div>
            </div>
        </div>
    </section>
</article>

<?php
include_once './common/footer.php'
?>