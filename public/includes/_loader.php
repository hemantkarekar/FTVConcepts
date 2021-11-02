    <style>
        .pre-loader {
            height: 100vh;
            width: 100%;
            z-index: 9999;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000000;
        }

        .pre-loader svg {
            height: 100px;
            width: auto;
            animation: growshrink 1s infinite linear;
        }

        @keyframes growshrink {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <section class="pre-loader">
        <svg version="1.1" id="L3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
            <circle fill="none" stroke="#fff" stroke-width="4" cx="50" cy="50" r="44" style="opacity:0.5;" />
            <circle fill="#fff" stroke="#000" stroke-width="5" cx="8" cy="54" r="6">
                <animateTransform attributeName="transform" dur="2s" type="rotate" from="0 50 48" to="360 50 52" repeatCount="indefinite" />
            </circle>
        </svg>
    </section>
    <script>
        var myloader = document.querySelector('.pre-loader');
        window.onload = () => {
            setTimeout(() => {
                myloader.style.display = 'none';
            }, 3000);
        };
    </script>