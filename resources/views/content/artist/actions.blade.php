
<div class="d-flex justify-content-start align-items-center">
    {{-- @can('location.write') --}}
    <!-- Edit -->
    <span data-bs-toggle="modal" data-bs-target="#editModal{{ $artist->id }}">
        <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
            data-bs-original-title="Edit">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" d="M4.76562 22.0449H20.7656" stroke="#1C274C" stroke-width="1.5"
                    stroke-linecap="round" />
                <path
                    d="M15.3952 2.96634L14.6537 3.70785L7.83668 10.5248C7.37495 10.9866 7.14409 11.2174 6.94554 11.472C6.71133 11.7723 6.51053 12.0972 6.3467 12.4409C6.20781 12.7324 6.10457 13.0421 5.89807 13.6616L5.02307 16.2866L4.80918 16.9282C4.70757 17.2331 4.78691 17.5692 5.01413 17.7964C5.24135 18.0236 5.57745 18.103 5.8823 18.0014L6.52396 17.7875L9.14897 16.9125L9.14902 16.9125C9.76846 16.706 10.0782 16.6027 10.3696 16.4638C10.7134 16.3 11.0383 16.0992 11.3386 15.865C11.5931 15.6665 11.824 15.4356 12.2857 14.9739L12.2857 14.9739L19.1027 8.15687L19.8442 7.41537C21.0728 6.1868 21.0728 4.19491 19.8442 2.96634C18.6156 1.73778 16.6237 1.73778 15.3952 2.96634Z"
                    stroke="#1C274C" stroke-width="1.5" />
                <path opacity="0.5"
                    d="M14.654 3.70801C14.654 3.70801 14.7467 5.2837 16.1371 6.67402C17.5274 8.06434 19.1031 8.15703 19.1031 8.15703M6.52433 17.7876L5.02344 16.2867"
                    stroke="#1C274C" stroke-width="1.5" />
            </svg>
        </button>
    </span>
    {{-- @endcan --}}
    @if ($artist->videos->count() == 0 && $artist->songs->count() == 0)
        {{-- @can('location.delete') --}}

        <!-- Delete -->
        <form action="{{ route('artist.destroy', $artist->id) }}" method="post" class="d-inline delete-form">
            @method('DELETE')
            @csrf
            <button type="button" class="btn btn-sm btn-icon delete-btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M9.84961 4.04492C10.2614 2.87973 11.3727 2.04492 12.6789 2.04492C13.9851 2.04492 15.0964 2.87973 15.5082 4.04492"
                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M21.1798 6.04492H4.17969" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                    <path
                        d="M19.5124 8.54492L19.0524 15.444C18.8754 18.0989 18.7869 19.4264 17.9219 20.2357C17.0569 21.0449 15.7265 21.0449 13.0657 21.0449H12.2924C9.63155 21.0449 8.30115 21.0449 7.43614 20.2357C6.57113 19.4264 6.48264 18.0989 6.30564 15.444L5.8457 8.54492"
                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M10.1797 11.0449L10.6797 16.0449" stroke="#1C274C" stroke-width="1.5"
                        stroke-linecap="round" />
                    <path opacity="0.5" d="M15.1797 11.0449L14.6797 16.0449" stroke="#1C274C" stroke-width="1.5"
                        stroke-linecap="round" />
                </svg>
            </button>
        </form>
        {{-- @endcan --}}
    @endif

</div>
{{-- @can('artist.write') --}}
<x-modal id="editModal{{ $artist->id }}" title="Edit Artist" saveBtnText="Update" saveBtnType="submit"
    saveBtnForm="editForm{{ $artist->id }}" size="md" :show="old('showEditFormModal' . $artist->id) ? true : false">
    @include('content.include.artist.editForm')
</x-modal>
{{-- @endcan --}}
