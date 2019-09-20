<div>

    <h2>Post</h2>
    <form method="post" action="admin.php?page=mymenupage" >
        <h2>Số Lượng </h2>
        <input id="number" name="number">
        <h2>Hiện Thị </h2>
        <select style="width: 200px" id="status" name="status">
            <option value="list">List</option>
            <option value="grid">grid</option>
            <option value="slide">slide</option>
        </select>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_POST["number"] !=null && $_POST["status"] !=null)
    {
        global $wpdb;
        $table_name =$wpdb->prefix ."featured";
        $check = $wpdb->get_var("SELECT * FROM $table_name WHERE id=1");
        if ($check!=null)
        {
            $wpdb->update($table_name,array("number"=>$_POST["number"],"status"=>$_POST["status"]),array("id"=>1));
        }
        else
        {
            $wpdb->insert($table_name,array("id"=>1,"number"=>$_POST["number"],"status"=>$_POST["status"]));
        }
    }

    ?>
</div>

