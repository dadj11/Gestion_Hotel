
    <div><h2> Reservations</h2>  <a href="reservation/form"><button>New Reservation</button></a></div>
    <table style="border-collapse: collapse; width: 100%; border-radius: 15px; border: 1px solid #ccc; margin-top: 20px;">
        <thead style="background-color: #f2f2f2; border-radius: 15px;">
            <tr >
                
                <th>Nom</th>
                <th>Chambre</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody style="border-radius: 15px;">
            <?php foreach($reservations as $reservation): ?>
            <tr>
                
                <td style="justify-content: center;"><?=  $reservation['name']; ?></td>
                <td style="justify-content: center;"><?=  $reservation['room']; ?></td>
                <td style="justify-content: center;"><?= $reservation['date']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
 