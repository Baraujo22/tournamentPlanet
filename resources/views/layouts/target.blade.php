<form action="modts" method="POST">
@csrf
  <div class="target-table">
    <table>
      <tbody>
        <tr>
          <td>Description
          </td>
          <td>
            <input type="text" class="targetDescription">
          </td>
        </tr>
        <tr>
          <td>Level
          </td>
          <td>
            <select name="" class="targetLevel">
              <option value="">Beginner
              </option>
              <option value="">Intermediate
              </option>
              <option value="">Professional
              </option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Target Type
          </td>
          <td>
            <select name="" class="targetType">
              <option value="">Fixed
              </option>
              <option value="">Moving
              </option>
              <option value="">Forbitten
              </option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Distance (ft)
          </td>
          <td>
            <input type="number" class="targetDistance">
          </td>
        </tr>
        <tr>
          <td>Maximum shots allowed
          </td>
          <td>
            <input type="number" class="targetMaxshots">
          </td>
        </tr>
        <tr>
          <td>Requirement
          </td>
          <td>
            <select name="" class="targetRequirement">
              <option value="">Required
              </option>
              <option value="">Optional
              </option>
              <option value="">Extra points
              </option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Scoring factors
          </td>
          <td>
            <select name="" clas="target-scoring-factor">
              <option value="">Hit
              </option>
              <option value="">Missed
              </option>
              <option value="">Bullseye
              </option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
    <input type="submit"  class="btn btn-primary pointer target-save" style="float:inline-end; margin-top:2vh" value="Save Target">
  </div>
  <br>
</form>
