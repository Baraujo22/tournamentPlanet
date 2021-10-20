<form action="submit" method="POST">
    @csrf
  <fieldset class="mx-auto fieldset">
    <table class="modality-table mt-8">
      <!-- Modality Row -->
      <tr>
        <td>
          <label for="modalityselector" class="grid-item-1">Select a Modality:
          </label>
        </td>
        
        <td>
          <select id="modalityselector" name="modalityselector" class="grid-item grid-item-2 dynamic pointer" data-dependent="modName">
            <option selected disabled value="">Select a Modality...
            </option>
            <option id="newmodality" value="">New
            </option>
            @foreach($data as $row)
            <option id="{{ $row->Modality_Id }}" value="{{ $row->modName }}" class="selectedoption">{{ $row->modName }}
            </option>
            @endforeach
          </select>
        </td>
      </tr>

        <!-- Modality Name Row -->
      <tr>
        <td>
          <label for="mname" class="grid-item-3">Modality Name:
          </label>
        </td>

        <td>
          <input type="text" id="modName" name="modName" class="grid-item grid-item-4" value="{{ old('modName')}}" data-dependent="modtype">
          <span style="color:red">@error('modName'){{ $message }} @enderror
          </span>
        </td>
      </tr>

      <!-- Modality Type Row -->
      <tr>
        <td>
          <label for="modtype" class="grid-item-5">Type:
          </label>
        </td>
        <td>
          <select id="modtype" name="modtype" class="grid-item grid-item-2 pointer" data-dependent="numberOfGames">
            <option value="">Choose...
            </option>
            <option>Competition
            </option>
            <option>Training
            </option>
            <span style="color:red">@error('modtype'){{ $message }} @enderror
            </span>
          </select>
        </td>
      </tr>

      <!-- Number of Games Row -->
      <tr>
        <td>
          <label for="numberOfGames" class="grid-item-7">Number of games:
          </label>
        </td>
        <td>
          <input type="number" id="numberOfGames" name="numberOfGames" class="grid-item grid-item-8" value="{{ old('numberOfGames')}}" data-dependent="continuous">
          <span style="color:red">@error('numberOfGames'){{ $message }} @enderror
          </span>
        </td>
      </tr>
      
      <!-- Continuous Row -->
      <tr>
        
        <td>
          <label for="continuous" class="grid-item-9">Continuous
          </label>
        </td>
        <td>
          <input type="hidden" name="continuous" value="0" data-dependent="notes">
          <input type="checkbox" id="continuous" class="grid-item grid-item-10" value="" data-dependent="notes">
          <span style="color:red">@error('continuous'){{ $message }} @enderror
          </span>
        </td>

      </tr>

      <!-- Notes -->
      <tr>
        <td>
          <label for="notes" class="grid-item-11">Notes
          </label>
        </td>
        <td>
          <input type="text" id="notes" name="notes" class="grid-item notes" value="{{ old('notes')}}">
        </td>
      </tr>

      <!-- Media -->
      <tr>
        <td>
          <label for="media" class="grid-item-11">Media
          </label>
        </td>
        <td>
          <input type="text" id="media" name="media" class="grid-item grid-item-12" placeholder="THE CONTENTS IN THIS FIELD WON'T BE INSERTED INTO THE DATABASE">
        </td>
      </tr>

      <!-- Save button -->
      <tr>
        <td>
          <input type="submit" class="pointer" value="Save">
        </td>
        <td>
          <input type="button" class="pointer create-target" value="Create Target">
          </td>
      </tr>
      </table>
      <!-- end of table -->
    
    <fieldset class="target-container">
      <legend class="legend">Targets</legend>
      <div class="target"></div>
    </fieldset>
    

  </fieldset>
</form>