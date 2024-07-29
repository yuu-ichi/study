import "./Pages/home";
import { format } from "date-fns";

function main() {
    const today = document.getElementById("today");
    today.setAttribute("text", format(new Date(), "'Today is a' eeee"));
}

export default main;
