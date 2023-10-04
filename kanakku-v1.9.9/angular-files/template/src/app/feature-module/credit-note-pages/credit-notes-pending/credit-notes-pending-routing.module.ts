import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreditNotesPendingComponent } from './credit-notes-pending.component';

const routes: Routes = [{ path: '', component: CreditNotesPendingComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CreditNotesPendingRoutingModule { }
