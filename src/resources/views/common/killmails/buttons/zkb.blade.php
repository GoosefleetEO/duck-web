<a 
        @if(request()->character)
        href="{{ route('character.view.killmail', ['character' => request()->character, 'killmail' => $row]) }}"
        @endif
        @if(request()->corporation)
        href="{{ route('corporation.view.killmail', ['corporation' => request()->corporation, 'killmail' => $row]) }}"
        @endif
target="_blank" class="text-muted">
  <i class="fas fa-external-link-alt"></i>
  Link
</a>
<!-- href="https://zkillboard.com/kill/{{ $row->killmail_id }}/" -->
