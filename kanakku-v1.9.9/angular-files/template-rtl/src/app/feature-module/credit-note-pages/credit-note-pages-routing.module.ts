import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreditNotePagesComponent } from './credit-note-pages.component';

const routes: Routes = [
  { path: '', component: CreditNotePagesComponent ,children:[
    {
      path: 'credit-notes',
      loadChildren: () =>
        import('./credit-notes/credit-notes.module').then(
          (m) => m.CreditNotesModule
        ),
    },
    {
      path: 'credit-notes-pending',
      loadChildren: () =>
        import('./credit-notes-pending/credit-notes-pending.module').then(
          (m) => m.CreditNotesPendingModule
        ),
    },
    {
      path: 'credit-notes-cancelled',
      loadChildren: () =>
        import('./credit-notes-cancelled/credit-notes-cancelled.module').then(
          (m) => m.CreditNotesCancelledModule
        ),
    },
    {
      path: 'credit-notes-details',
      loadChildren: () =>
        import('./credit-notes-details/credit-notes-details.module').then(
          (m) => m.CreditNotesDetailsModule
        ),
    },
    {
      path: 'credit-notes-draft',
      loadChildren: () =>
        import('./credit-notes-draft/credit-notes-draft.module').then(
          (m) => m.CreditNotesDraftModule
        ),
    },
    {
      path: 'credit-notes-overdue',
      loadChildren: () =>
        import('./credit-notes-overdue/credit-notes-overdue.module').then(
          (m) => m.CreditNotesOverdueModule
        ),
    },
    {
      path: 'credit-notes-recurring',
      loadChildren: () =>
        import('./credit-notes-recurring/credit-notes-recurring.module').then(
          (m) => m.CreditNotesRecurringModule
        ),
    },
    {
      path: 'edit-credit-notes',
      loadChildren: () =>
        import('./edit-credit-notes/edit-credit-notes.module').then(
          (m) => m.EditCreditNotesModule
        ),
    },
    {
      path: 'add-credit-notes',
      loadChildren: () =>
        import('./add-credit-notes/add-credit-notes.module').then(
          (m) => m.AddCreditNotesModule
        ),
    },
  ] },
 
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CreditNotePagesRoutingModule {}
