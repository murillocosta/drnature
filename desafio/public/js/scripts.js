document.addEventListener("DOMContentLoaded", function () {
    // Seletor para todas as divs de entrega
    var buttonsEntrega = document.querySelectorAll(".entrega");
    var circle1 = document.querySelector("#circle-1");
    var circle2 = document.querySelector("#circle-2");

    // Adicione um evento de clique a cada div de entrega
    buttonsEntrega.forEach(function (button) {
        button.addEventListener("click", function () {
            // Capture o valor do h3 dentro da div clicada
            var h3Value = this.querySelector("h3").textContent;

            // Defina o valor do campo oculto
            document.getElementById("entrega").value = h3Value;

            // Adicione uma classe de destaque à div clicada (opcional)
            buttonsEntrega.forEach(function (buttonEntrega) {
                buttonEntrega.classList.add("entrega-inativa");
            });

            this.classList.remove("entrega-inativa");
        });
    });

    circle1.addEventListener("click", function () {
        circle1.classList.remove("small-circle-inativo");
        circle2.classList.add("small-circle-inativo");
    });
    circle2.addEventListener("click", function () {
        circle2.classList.remove("small-circle-inativo");
        circle1.classList.add("small-circle-inativo");
    });
});
