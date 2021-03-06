{items}<h5> {name} </h5>{/items}

<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Ingredient</th>
      <th class="mdl-data-table__cell--non-numeric">Amount</th>
    </tr>
  </thead>

  {items}
  <tbody>
    <tr>
      <td>Pickel</td>
      <td>{pickel}</td>
    </tr> 
    <tr>
      <td>Ketchup</td>
      <td>{ketchup}</td>
    </tr> 
    <tr>
      <td>Tomato</td>
      <td>{tomato}</td>
    </tr> 
    <tr>
      <td>Mustard</td>
      <td>{mustard}</td>
    </tr> 
    <tr>
      <td>Onions</td>
      <td>{onions}</td>
    </tr> 
    <tr>
      <td>Buns</td>
      <td>{buns}</td>
    </tr> 
    <tr>
      <td>Meat Patty</td>
      <td>{meat patty}</td>
    </tr> 
    <tr>
      <td>Mac Sauce</td>
      <td>{mac sauce}</td>
    </tr> 
    <tr>
      <td>Fish patty</td>
      <td>{fish patty}</td>
    </tr> 
    <tr>
      <td>Fries</td>
      <td>{fries}</td>
    </tr> 
    <tr>
      <td>Soft drink</td>
      <td>{soft drink}</td>
    </tr> 
  </tbody>
  {/items}
  
</table>