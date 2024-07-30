import "./Pages/home";
import { format } from "date-fns";

function todayText() {
    const today = document.getElementById("today");
    today.textContent = format(new Date(), "'Today is a' eeee");
}

function main() {
    todayText();
}

(function () {
    main();
})();

export default main;
