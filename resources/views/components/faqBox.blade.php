<section class="faq">
    <details>
        <summary>{{$faq->question}}</summary>
        <div>
            {{$faq->answer}}
            <br>
            {{$faq->link}}
        </div>
        <br>
        <div style="display: flex; gap: 10px">
            <a href="{{route('faq.edit', ['faq' => $faq])}}" class="button has-background-primary">Edit</a>
            <button class="js-modal-trigger has-background-danger button" data-target="modal-js"
                    style="margin-left: 10px; margin-top: -5px">Delete
            </button>
        </div>
    </details>

    <div class="modal" id="modal-js">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Are you sure you want to delete this post?</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body is-clipped">
                <p class="image is-4by3">
                    <img
                        src="{{asset("images/shock-shocker.png")}}" alt="">
                </p>
            </section>
            <footer class="modal-card-foot">
                <form action="{{route('faq.destroy', ['faq' => $faq])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button has-background-danger">Delete</button>
                </form>
            </footer>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Functions to open and close a modal
            function openModal($el) {
                $el.classList.add('is-active');
            }

            function closeModal($el) {
                $el.classList.remove('is-active');
            }

            function closeAllModals() {
                (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                    closeModal($modal);
                });
            }

            // Add a click event on buttons to open a specific modal
            (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
                const modal = $trigger.dataset.target;
                const $target = document.getElementById(modal);

                $trigger.addEventListener('click', () => {
                    openModal($target);
                });
            });

            // Add a click event on various child elements to close the parent modal
            (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
                const $target = $close.closest('.modal');

                $close.addEventListener('click', () => {
                    closeModal($target);
                });
            });

            // Add a keyboard event to close all modals
            document.addEventListener('keydown', (event) => {
                if (event.key === "Escape") {
                    closeAllModals();
                }
            });
        });
    </script>
</section>
