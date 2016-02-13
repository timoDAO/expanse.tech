<?php include_once('../connect.php'); ?>
<?php 

if(isset($_GET['search'])) $_POST['search']=$_GET['search'];
if(isset($_POST['search'])){	
	//TODO: Check if Right Format hash
	// Is Block Number?
	if(is_numeric($_POST['search'])){
		$result = $db->query('SELECT * FROM blocks where CONCAT("",`number`)="'.mysqli_real_escape_string($db,$_POST['search']).'"');
		if($result->num_rows !== 0) {
			$foundBlock=1; 
			$content_head='Block #: '.$_POST['search'];
		} else { 
			// Not Block Number, so Check Block Hash
			$result = $db->query('SELECT * FROM blocks where `hash`="'.mysqli_real_escape_string($db,$_POST['search']).'"');
			if($result->num_rows !== 0) {
				$foundBlock=1; 
				$content_head='Block: '.$_POST['search'];
			 } else { 
				//Not a Block, is it a TX?
				$result = $db->query('SELECT transactions.*, blocks.timestamp FROM transactions join blocks on transactions.blockHash=blocks.`hash`  where transactions.`hash`="'.mysqli_real_escape_string($db,$_POST['search']).'"');

				//$result = $db->query('SELECT transactions.* FROM transactions  where `hash`="'.mysqli_real_escape_string($db,$_POST['search']).'"');
				if($result->num_rows !== 0) {
					$foundTx=1; 
					$content_head='Transaction: '.$_POST['search'];
				 } else { 
					//Not TX or Block, IS it account?
					$result = $db->query('SELECT * FROM accounts where `hash`="'.mysqli_real_escape_string($db,$_POST['search']).'"');
					if($result->num_rows !== 0) {
						$foundAct=1; 
						$content_head='Account: '.$_POST['search'];
					} else {
						$content_head='No Result Found';
						$content = 'No Matching Record could be found. Please be sure you entered a valid Block or Transaction Hash, Block Number, or Account.<br />While in development, some features may not be fully functional.';
					}
				 }			
			}
		}
	}
	if($foundBlock==1){
			$row = $result->fetch_assoc();
			$content.="<ul>";
			$content.="<li>Block Height: ".$row['number'].'</li>';
			$content.="<li>Block Hash: ".$row['hash'].'</li>';
			$content.="<li>Time: ".$row['timestamp'].' ('.time_since(time() - strtotime($row['timestamp'])).' ago)</li>';
			$content.="<li>Nonce: ".$row['nonce'].'</li>';
			$content.="<li>Difficulty: ".$row['difficulty'].'</li>';
			$content.="<li>Size: ".$row['size'].' bytes</li>';
			$content.="<li>Parent Hash: ".$row['parentHash'].'</li>';
			$content.="<li>Uncles Hash: ".$row['sha3Uncles'].'</li>';
			$content.="<li>Miner: ".$row['miner'].'</li>';
			$content.="<li>TxRoot: ".$row['transactionsRoot'].'</li>';
			$content.="<li>StateRoot: ".$row['stateRoot'].'</li>';
			$content.="<li>Gas Used: ".$row['gasUsed'].'</li>';
			$content.="<li>Gas Limit: ".$row['gasLimit'].'</li>';
			$content.="<li>Extra Data: ".$row['extraData'].'</li>';
			$content.="</ul>";
		} elseif($foundTx==1){
			$row = $result->fetch_assoc();
			$content.="<ul>";
			$content.="<li>Transaction Hash: ".$row['hash'].'</li>';
			$content.="<li>Block: ".$row['blockNumber'].'</li>';
			$content.="<li>Time: ".$row['timestamp'].' ('.time_since(time() - strtotime($row['timestamp'])).' ago)</li>';
			$content.="<li>Value: ".($row['value']/1000000000000000000).' EXP</li>';
			$content.="<li>From: ".$row['from'].'</li>';
			$content.="<li>To: ".$row['to'].'</li>';
			$content.="<li>Gas: ".$row['gas'].'</li>';
			$content.="<li>Gas Price: ".$row['gasPrice'].'</li>';
			$content.="<li>Nonce: ".$row['nonce'].'</li>';
			$content.="</ul>";
		} elseif($foundAct==1){
			$row = $result->fetch_assoc();
			$content.="<ul>";
			$content.="<li>Account Hash: ".$row['hash'].'</li>';
			$content.="<li>Balance: ".$row['balance'].'</li>';
			$content.="</ul>";
		}
}
/*
 
 	var avgBlocktime = (_.sum(blocktimeHistory) / blocktimeHistory.length)/1000; 
 	return this.bestBlock().block.difficulty / avgBlocktime; 


*/
?>
<?php include('../header.php'); ?>
<div id="explorer_search">
  <div class="container">
  <div class="row">
  <div class="col-md-6 text-center" id="explorer_serach_menu">Expanse Block Explorer v.01beta 
      <ul class="nav nav-tabs orange">
      <?php
	  	if(isset($_GET['view'])){
			switch($_GET['view']){
				case "blocks": $active=1; break;
				case "tx": $active=2; break;
				case "accounts": $active=3; break;
				case "stats": $active=4; break;
				case "tools": $active=5; break;
				default: $active=0; 
			}
		}
	  ?>
      <li<?php if($active==0) echo ' class="active"'; ?>><a href="/explorer/">Home</a></li>
      <li<?php if($active==1) echo ' class="active"'; ?>><a href="/explorer/blocks">Blocks</a></li>
      <li<?php if($active==2) echo ' class="active"'; ?>><a href="/explorer/transactions">Transactions</a></li>
      <li<?php if($active==3) echo ' class="active"'; ?>><a href="/explorer/accounts">Accounts</a></li>
      <li<?php if($active==4) echo ' class="active"'; ?>><a href="/explorer/stats">Stats</a></li>
      <li<?php if($active==5) echo ' class="active"'; ?>><a href="/explorer/tools">Tools</a></li>
      </ul>
      </div>
   <div class="col-md-6 text-center" id="explorer_search_box">
   <form class="form-inline" method="post" action="/explorer/">
      <div class="form-group">
        <label class="sr-only" for="search">Search</label>
        <input type="search" name="search" class="form-control mt5" id="search" placeholder="TX Hash, Block #/Hash, or Account Address">
      </div>

  		<button type="submit" class="btn btn-default  mt5">Search</button>
</form>
   
   </div>
  </div>
  </div>
  </div>
  <div id="spacer_wall"></div>

 <div class="bar-greyblue h7"></div>
<div id="explorer_base">
  <div class="container">
  
  <?php if(isset($content)) {?>
  	<div class="row text-center pad-section" >
    
        <div class="panel panel-default text-left">
        <div class="panel-heading">
    <h3 class="panel-title"><?php echo $content_head; ?></h3>
  </div>
            <div class="panel-body"><?php echo $content; ?></div>
        </div>
     </div>
     <?php }elseif(isset($_GET['view']) && $_GET['view']=="accounts") {?>
     <div class="row  text-center" >  
	 <h2 class="mt5">Expanse Accounts</h2><h7>(Does not currently show Smart Contract Balances)</h7>
	 <table id="latest_accounts" class="table blocktable table-striped table-hover">
	   <thead id="headline_accounts">
	     <th>Account</th><th >Balance</th><th>Blocks Mined</th><th>Tx Count</th></thead>
       <?php
		$result = $db->query('SELECT *, balance/1000000000000000000 as exp FROM accounts where status <>2 order by exp desc limit 0,25');
		while($row = $result->fetch_assoc()) {
				//if($row['exp']>1)
				 $balance=$row['exp'].'EXP';// else $balance=$row['balance'].'WEI';
				echo '<tr><td><a href="./account/' . $row["hash"]. '">'.$row["hash"].'</a></td><td style="text-align:left;"><a href="./account/' . $row["hash"]. '">'.$balance.'</a></td><td>#</td><td><td>#</td></tr>';
			}
	   ?>
	 </table>
        </div>
   <?php }elseif(isset($_GET['view']) && $_GET['view']=="blocks") {?>
     <div class="row  text-center" >  
	 <h2 class="mt5">Latest Blocks</h2>
	 <table id="latest_blocks" class="table blocktable table-striped table-hover">
	   <thead id="headline_blocks"><th>Height</th><th>Hash</th><th>Miner</th><th>Timestamp</th><th>Tx Count</th></thead>
       <?php
		$result = $db->query('SELECT * FROM blocks order by timestamp desc limit 0,25');
		while($row = $result->fetch_assoc()) {
				echo '<tr><td><a href="./block_number/' . $row["number"]. '">'.$row["number"].'</a></td><td><a href="./block/' . $row["hash"].'">'.substr($row["hash"], 0, 22). '...</a></td><td><a href="./miner/' . $row["miner"].'">'.substr($row["miner"], 0, 22). '...</a></td><td>'.$row['timestamp']."</td><td>#</td></tr>";
			}
	   ?>
	 </table>
        </div>
   
     <?php }elseif(isset($_GET['view']) && $_GET['view']=="tx") {?>
     <div class="row  text-center" >  
	 <h2 >Latest Transactions</h2>
	 <table id="latest_transactions" class="table blocktable table-striped table-hover">
	   <thead id="headline_transactions"><th>TX#</th><th>From</th><th>To</th><th>Amount</th></thead>
       <?php
		$result = $db->query('SELECT * FROM transactions order by blocknumber desc limit 0,15');
		while($row = $result->fetch_assoc()) {
				echo '<tr><td><a href="./tx/' . $row["hash"]. '">' . substr($row["hash"], 0, 22)."...</a></td><td>" .substr($row["from"], 0, 22). "...</td><td>" . substr($row["to"], 0, 22). "...</td><td>" . ($row['value']/1000000000000000000) . "</td></tr>";
			}
	   ?>
	 </table>
        </div>
<?php } else {?> 

    <div class="row  text-center" >
    
    <div class="col-md-6" id="latestblocks">
	 <h3>Latest Blocks</h3>
	 <table id="latest_blocks" class="table blocktable table-striped table-hover">
	   <thead id="headline_blocks"><th>Height</th><th>Hash</th><th>Miner</th><th>Age</th></thead>
       <?php
		$result = $db->query('SELECT * FROM blocks order by timestamp desc limit 0,10');
		while($row = $result->fetch_assoc()) {
				echo '<tr><td><a href="./block_number/' . $row["number"]. '">'.$row["number"].'</a></td><td><a href="./block/' . $row["hash"].'">'.substr($row["hash"], 0, 22). '...</a></td><td><a href="./miner/' . $row["miner"].'">'.substr($row["miner"], 0, 22). '...</a></td><td>'.time_since(time() - strtotime($row['timestamp']))." ago</td></tr>";
			}
	   ?>
	 </table>
        </div>

    <div class="col-md-6" id="transactions">
	 <h3>Latest Transactions</h3>
	<table id="latest_transactions" class="table blocktable table-striped table-hover">
	   <thead id="headline_transactions"><th>TX#</th><th>From</th><th>To</th><th>Amount</th></thead>
       <?php
		$result = $db->query('SELECT * FROM transactions order by blocknumber desc limit 0,10');
		while($row = $result->fetch_assoc()) {
				echo '<tr><td><a href="./tx/' . $row["hash"]. '">' . substr($row["hash"], 0, 22)."...</a></td><td>" .substr($row["from"], 0, 22). "...</td><td>" . substr($row["to"], 0, 22). "...</td><td>" . ($row['value']/1000000000000000000) . "</td></tr>";
			}
	   ?>
	 </table>
	</div>
	
    </div>
    <?php } ?>
  </div>
</div>
<div class="bar-greyblue"></div>
<div class="bar-orange"></div>
<div class="bar-darkblue"></div>
<?php include('../footer.php'); ?>