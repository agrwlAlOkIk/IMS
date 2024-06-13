<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="finalstyles.css">
</head>

<body>
    <div class="header">
        <h1 class="header_text">Welcome To Inventory Management System</h1>
    </div>

    <div class="container">
    <div class="first_row">
        <div class="card">
            <div class="intro">
                <h1 class="text">Customer</h1>
            </div>
            <div class="button1">
                <button class="button" id="CustomerDisplay">Display</button>
            </div>
            <div class="button2">
                <button class="button" id="CustomerInsert">Insert</button>
            </div>
        </div>

        <div class="card">
            <div class="intro">
                <h1 class="text">Product</h1>
            </div>
            <div class="button1">
                <button class="button" id="ProductDisplay">Display</button>
            </div>
            <div class="button2">
                <button class="button" id="ProductInsert">Insert</button>
            </div>
        </div>

        <div class="card">
            <div class="intro">
                <h1 class="text">Supplier</h1>
            </div>
            <div class="button1">
                <button class="button" id="SupplierDisplay">Display</button>
            </div>
            <div class="button2">
                <button class="button" id="SupplierInsert">Insert</button>
            </div>
        </div>
    </div>

    <div class="second_row">
        <div class="card">
            <div class="intro">
                <h1 class="text">SalesOrder</h1>
            </div>
            <div class="button1">
                <button class="button" id="SalesOrderDisplay">Display</button>
            </div>
            <div class="button2">
                <button class="button" id="SalesOrderInsert">Insert</button>
            </div>
        </div>

        <div class="card">
            <div class="intro">
                <h1 class="text">PurchaseOrder</h1>
            </div>
            <div class="button1">
                <button class="button" id="PurchaseOrderDisplay">Display</button>
            </div>
            <div class="button2">
                <button class="button" id="PurchaseOrderInsert">Insert</button>
            </div>
        </div>
    </div>
    </div>

    <script>
    document.querySelectorAll('#CustomerDisplay').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#CustomerInsert').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#ProductDisplay').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#ProductInsert').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#SupplierDisplay').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#SupplierInsert').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#SalesOrderDisplay').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#SalesOrderInsert').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#PurchaseOrderDisplay').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });

    document.querySelectorAll('#PurchaseOrderInsert').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault(); // Prevent default action of anchor tag
        let page = item.getAttribute('id'); // Get the id attribute of the clicked item
        window.location.href = page + '.php'; // Redirect to the corresponding PHP page
      });
    });
  </script>
</body>

</html>