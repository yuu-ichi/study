import "./Pages/home";
import { format } from "date-fns";

function main() {
    // TODO: 曜日
    const today = document.getElementById("today");
    today.setAttribute("text", format(new Date(), "'Today is a' eeee"));
}

export default main;
