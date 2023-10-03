var table = document.getElementById('tb-user'), rIndex;

for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        rIndex = this.rowIndex;
        document.getElementById("id-1").value = this.cells[0].innerHTML;
        document.getElementById("pname").value = this.cells[1].innerHTML;
        document.getElementById("pdesc").value = this.cells[2].innerHTML;
        document.getElementById("category").value = this.cells[3].innerHTML;
        document.getElementById("sell").value = this.cells[4].innerHTML;
        document.getElementById("Buy").value = this.cells[5].innerHTML;
        document.getElementById("img").value = this.cells[6].innerHTML;
        document.getElementById("active").value = this.cells[7].innerHTML;
    };
}
