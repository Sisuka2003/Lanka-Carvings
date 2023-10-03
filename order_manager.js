var table = document.getElementById('tb-user'), rIndex;

for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        rIndex = this.rowIndex;
        document.getElementById("oid").value = this.cells[0].innerHTML;
        document.getElementById("Cnum").value = this.cells[1].innerHTML;
        document.getElementById("chname").value = this.cells[2].innerHTML;
        document.getElementById("cardNum").value = this.cells[3].innerHTML;
        document.getElementById("deliAddress").value = this.cells[4].innerHTML;
        document.getElementById("uname").value = this.cells[5].innerHTML;
        document.getElementById("proName").value = this.cells[6].innerHTML;
        document.getElementById("amount").value = this.cells[7].innerHTML;
        document.getElementById("quantity").value = this.cells[8].innerHTML;
        document.getElementById("payment").value = this.cells[9].innerHTML;
    };
}

