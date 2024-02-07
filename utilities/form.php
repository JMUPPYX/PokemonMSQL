<section>
    <!-- formulaire  -->
    <div class="container pt-5 w-50">
        <form>
            <div>
                <h4 class="text-uppercase fw-bold">formulaire de contact</h4>
            </div>
            <div class="row mt-4">
                <!-- input du nom -->
                <div class="col-6">
                    <input type="text" class=" form-control rounded-0" id="nomInput" placeholder="VOTRE NOM"
                        aria-label="VOTRE NOM">
                </div>
                <div class="col-6">
                    <!-- input du prénom -->
                    <input type="text" class="form-control rounded-0" id="prenomInput" placeholder="VOTRE PRENOM"
                        aria-label="VOTRE PRENOM">
                </div>
            </div>

            <div class="row mt-4">
                <!-- input du telephone -->
                <div class="col-6">
                    <input type="tel" class="form-control rounded-0" placeholder="VOTRE TELEPHONE"
                        aria-label="VOTRE TELEPHONE">
                </div>
                <!-- input du mail-->
                <div class="col-6">
                    <input type="email" class="form-control rounded-0" placeholder="VOTRE EMAIL"
                        aria-label=" VOTRE EMAIL">
                </div>
            </div>
            <div class="row mt-4">
                <!-- input du sujet -->
                <div class="col-12">
                    <input type="text" class="bg-grey form-control rounded-0" id="sujet" placeholder="SUJET"
                        aria-label="SUJET">
                </div>
            </div>
            <div class="mt-4 h-50">
                <!-- input du textarea-->
                <textarea class="bg-grey form-control rounded-0 w-100" id="exampleFormControlTextarea1"
                    rows="6"></textarea>
            </div>
            <!-- boutton  -->
            <div class="text-center">
                <button type="submit"
                    class="mt-5 btn-lg rounded-0 btn btn-bg text-dark fs-5 fw-bold btn-outline-secondary border border-3 rounded-3">Envoyer</button>
            </div>
        </form>
    </div>
</section>