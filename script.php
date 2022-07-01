<?php declare(strict_types=1);

define('NEWS_LENGTH', 20);
// define('NEWS_LENGTH', 180);

$a = "
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Vero impedit similique error libero necessitatibus commodi 
    voluptates molestias nemo eius, 
    totam nesciunt culpa quod aut sequi voluptate. 
    Facere natus, assumenda corrupti sunt rem, 
    debitis a reprehenderit est corporis impedit 
    in exercitationem repudiandae officiis porro! 
    Sequi ut at neque animi, dolorem necessitatibus 
    repellendus aspernatur deserunt quis incidunt ad dolor exercitationem, 
    nam, possimus labore accusamus? Natus iusto ea eveniet. 
    Architecto, recusandae? Praesentium placeat quisquam iste itaque animi numquam eaque, 
    magni labore, voluptate at, qui molestias! 
    Maiores cumque unde ut quaerat amet ipsa neque delectus architecto! 
    Fugiat eos animi, perferendis, accusantium omnis quod adipisci velit 
    earum facere sint provident modi sapiente maiores, quia nam. 
    Voluptate itaque nostrum modi atque consequuntur, excepturi asperiores, 
    enim maxime minima, alias ipsum? Deserunt, 
    dignissimos nostrum dolores ea aut laudantium inventore nemo vero nulla 
    id earum accusantium sit, quia illum vitae itaque dicta excepturi explicabo 
    odit facilis culpa quam odio iste! Asperiores, fugiat. 
    Debitis magnam distinctio eaque nam exercitationem magni quibusdam atque a expedita! 
    Iure hic qui voluptatem, consequatur vero quam iste libero et corrupti 
    aliquam doloremque tempore quos quisquam nam saepe nobis 
    esse magnam cumque quo delectus similique commodi explicabo ad necessitatibus. 
    Amet cumque fuga adipisci dolore nihil vitae, 
    nam tenetur repellat accusantium aut nisi eveniet culpa qui reiciendis suscipit, 
    nesciunt eos pariatur voluptatibus totam corporis rerum a, 
    veritatis laboriosam incidunt! Obcaecati saepe cupiditate quaerat? 
    Excepturi aliquam provident minus, nemo veniam quidem repellat obcaecati suscipit, 
    ab possimus esse blanditiis nihil laudantium, itaque ad commodi dicta? 
    Soluta dolores beatae itaque quas officia tempore dolorem aliquam earum. 
    Quidem non doloremque sint aperiam nemo, perspiciatis et at corrupti. 
    Nemo, aperiam illum adipisci inventore nulla iusto pariatur facilis maxime 
    qui velit excepturi architecto sunt, asperiores tenetur suscipit dolores 
    aut ex provident vero odio, labore dignissimos. 
    Non iusto nobis exercitationem iure earum recusandae molestiae?
";

$link = 'full_text.html';


$b = substr($a, 0, NEWS_LENGTH);
$b .= '...';

require 'template.php';
