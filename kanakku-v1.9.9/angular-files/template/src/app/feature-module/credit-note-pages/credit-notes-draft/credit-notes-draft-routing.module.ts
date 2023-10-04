import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreditNotesDraftComponent } from './credit-notes-draft.component';

const routes: Routes = [{ path: '', component: CreditNotesDraftComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CreditNotesDraftRoutingModule { }
