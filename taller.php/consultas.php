<input type="hidden" value="<?=$user->Id?>" name="id">
                        <button type="submit">Eliminar</button>
                    </form></td>
                    <td><button>ver</button></td>
                    <td><form action="update.php" method="post">
                    <input type="hidden" value="<?=$user->Id?>" name="id">
                    <button type="submite"></button>
                    </form></td>
                </tr>
                <?php endwhile;?>